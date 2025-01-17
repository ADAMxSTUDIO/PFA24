_sum($this->errorCount);
    }

    public function clear(): void
    {
        $this->logs = [];
        $this->errorCount = [];
    }

    private function format(string $level, string $message, array $context, bool $prefixDate = true): string
    {
        if (str_contains($message, '{')) {
            $replacements = [];
            foreach ($context as $key => $val) {
                if (null === $val || \is_scalar($val) || $val instanceof \Stringable) {
                    $replacements["{{$key}}"] = $val;
                } elseif ($val instanceof \DateTimeInterface) {
                    $replacements["{{$key}}"] = $val->format(\DateTimeInterface::RFC3339);
                } elseif (\is_object($val)) {
                    $replacements["{{$key}}"] = '[object '.$val::class.']';
                } else {
                    $replacements["{{$key}}"] = '['.\gettype($val).']';
                }
            }

            $message = strtr($message, $replacements);
        }

        $log = sprintf('[%s] %s', $level, $message);
        if ($prefixDate) {
            $log = date(\DateTimeInterface::RFC3339).' '.$log;
        }

        return $log;
    }

    private function record($level, $message, array $context): void
    {
        $request = $this->requestStack->getCurrentRequest();
        $key = $request ? spl_object_id($request) : '';

        $this->logs[$key][] = [
            'channel' => null,
            'context' => $context,
            'message' => $message,
            'priority' => self::PRIORITIES[$level],
            'priorityName' => $level,
            'timestamp' => time(),
            'timestamp_rfc3339' => date(\DATE_RFC3339_EXTENDED),
        ];

        $this->errorCount[$key] ??= 0;
        switch ($level) {
            case LogLevel::ERROR:
            case LogLevel::CRITICAL:
            case LogLevel::ALERT:
            case LogLevel::EMERGENCY:
                ++$this->errorCount[$key];
        }
    }
}
                                                          