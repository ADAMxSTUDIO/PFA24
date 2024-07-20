<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\Cache;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Handles HTTP cache headers configured via the Cache attribute.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CacheAttributeListener implements EventSubscriberInterface
{
    /**
     * @var \SplObjectStorage<Request, \DateTimeInterface>
     */
    private \SplObjectStorage $lastModified;

    /**
     * @var \SplObjectStorage<Request, string>
     */
    private \SplObjectStorage $etags;

    public function __construct(
        private ?ExpressionLanguage $expressionLanguage = null,