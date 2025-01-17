e;
        } elseif (\is_object($controller) && !$controller instanceof \Closure) {
            $class = $controller;
            $name = $class::class.'::__invoke';
        } else {
            $r = new \ReflectionFunction($controller);
            $name = $r->name;

            if (str_contains($name, '{closure')) {
                $name = $class = \Closure::class;
            } elseif ($class = \PHP_VERSION_ID >= 80111 ? $r->getClosureCalledClass() : $r->getClosureScopeClass()) {
                $class = $class->name;
                $name = $class.'::'.$name;
            }
        }

        if ($class) {
            foreach ($this->allowedControllerTypes as $type) {
                if (is_a($class, $type, true)) {
                    return $controller;
                }
            }
        }

        $r ??= new \ReflectionClass($class);

        foreach ($r->getAttributes() as $attribute) {
            if (isset($this->allowedControllerAttributes[$attribute->getName()])) {
                return $controller;
            }
        }

        if (str_contains($name, '@anonymous')) {
            $name = preg_replace_callback('/[a-zA-Z_\x7f-\xff][\\\\a-zA-Z0-9_\x7f-\xff]*+@anonymous\x00.*?\.php(?:0x?|:[0-9]++\$)[0-9a-fA-F]++/', fn ($m) => class_exists($m[0], false) ? (get_parent_class($m[0]) ?: key(class_implements($m[0])) ?: 'class').'@anonymous' : $m[0], $name);
        }

        if (-1 === $request->attributes->get('_check_controller_is_allowed')) {
            trigger_deprecation('symfony/http-kernel', '6.4', 'Callable "%s()" is not allowed as a controller. Did you miss tagging it with "#[AsController]" or registering its type with "%s::allowControllers()"?', $name, self::class);

            return $controller;
        }

        throw new BadRequestException(sprintf('Callable "%s()" is not allowed as a controller. Did you miss tagging it with "#[AsController]" or registering its type with "%s::allowControllers()"?', $name, self::class));
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        