<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Allows to create a response for a thrown exception.
 *
 * Call setResponse() to set the response that will be returned for the
 * current request. The propagation of this event is stopped as soon as a
 * response is set.
 *
 * You can also call setThrowable() to replace the thrown exception. This
 * exception will be thrown if no response is set during processing of this
 * event.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class ExceptionEvent extends RequestEvent
{
    private \Throwable $throwable;
    private bool $allowCustomResponseCode = false;

    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, \Throwable $e)
    {
        parent::__construct($kernel, $request, $requestType);

        $this->setThrowable($e);
    }

    public function getThrowable(): \Throwable
    {
        return $this->throwable;
    }

    /**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     */
    public function setThrowable(\Throwable $exception): void
    {
        $this->throwable = $exception;
    }

    /**
     * Mark the event as allowing a custom response code.
     */
    public function allowCustomResponseCode(): void
    {
        $this->allowCustomResponseCode = true;
    }

    /**
     * Returns true if the event allows a custom response code.
     */
    public function isAllowingCustomResponseCode(): bool
    {
        return $this->allowCustomResponseCode;
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension as BaseExtension;

/**
 * Allow adding classes to the class cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension extends BaseExtension
{
    private array $annotatedClasses = [];

    /**
     * Gets the annotated classes to cache.
     */
    public function getAnnotatedClassesToCompile(): array
    {
        return $this->annotatedClasses;
    }

    /**
     * Adds annotated classes to the class cache.
     *
     * @param array $annotatedClasses An array of class patterns
     *
     * @return void
     */
    public function addAnnotatedClassesToCompile(array $annotatedClasses)
    {
        $this->annotatedClasses = array_merge($this->annotatedClasses, $annotatedClasses);
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * 