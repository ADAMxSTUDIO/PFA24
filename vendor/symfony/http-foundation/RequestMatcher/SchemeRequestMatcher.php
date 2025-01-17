ogate-Control', preg_replace(sprintf('#,\s*content="%s/1.0"#', $upperName), '', $value));
        } elseif (preg_match(sprintf('#content="%s/1.0",\s*#', $upperName), $value)) {
            $response->headers->set('Surrogate-Control', preg_replace(sprintf('#content="%s/1.0",\s*#', $upperName), '', $value));
        }
    }

    protected static function generateBodyEvalBoundary(): string
    {
        static $cookie;
        $cookie = hash('xxh128', $cookie ?? $cookie = random_bytes(16), true);
        $boundary = base64_encode($cookie);

        \assert(HttpCache::BODY_EVAL_BOUNDARY_LENGTH === \strlen($boundary));

        return $boundary;
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           