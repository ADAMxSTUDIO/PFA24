->headers->has('Vary');

        foreach (array_reverse($attributes) as $cache) {
            if (null !== $cache->smaxage && !$response->headers->hasCacheControlDirective('s-maxage')) {
                $response->setSharedMaxAge($this->toSeconds($cache->smaxage));
            }

            if ($cache->mustRevalidate) {
                $response->headers->addCacheControlDirective('must-revalidate');
            }

            if (null !== $cache->maxage && !$response->headers->hasCacheControlDirective('max-age')) {
                $response->setMaxAge($this->toSeconds($cache->maxage));
            }

            if (null !== $cache->maxStale && !$response->headers->hasCacheControlDirective('max-stale')) {
                $response->headers->addCacheControlDirective('max-stale', $this->toSeconds($cache->maxStale));
            }

            if (null !== $cache->staleWhileRevalidate && !$response->headers->hasCacheControlDirective('stale-while-revalidate')) {
                $response->headers->addCacheControlDirective('stale-while-revalidate', $this->toSeconds($cache->staleWhileRevalidate));
            }

            if (null !== $cache->staleIfError && !$response->headers->hasCacheControlDirective('stale-if-error')) {
                $response->headers->addCacheControlDirective('stale-if-error', $this->toSeconds($cache->staleIfError));
            }

            if (null !== $cache->expires && !$response->headers->has('Expires')) {
                $response->setExpires(new \DateTimeImmutable('@'.strtotime($cache->expires, time())));
            }

            if (!$hasVary && $cache->vary) {
                $response->setVary($cache->vary, false);
            }
        }

        foreach ($attributes as $cache) {
            if (true === $cache->public) {
                $response->setPublic();
            }

            if (false === $cache->public) {
                $response->setPrivate();
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => ['onKernelControllerArguments', 10],
            KernelEvents::RESPONSE => ['onKernelResponse', -10],
        ];
    }

    private function getExpressionLanguage(): ExpressionLanguage
    {
        return $this->expressionLanguage ??= class_exists(ExpressionLanguage::class)
            ? new ExpressionLanguage()
            : throw new \LogicException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed. Try running "composer require symfony/expression-language".');
    }

    private function toSeconds(int|string $time): int
    {
        if (!is_numeric($time)) {
            $now = time();
            $time = strtotime($time, $now) - $now;
        }

        return $time;
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          