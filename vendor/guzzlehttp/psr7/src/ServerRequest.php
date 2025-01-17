<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Debug;

use Psr\Log\LoggerInterface;
use Symfony\Component\ErrorHandler\ErrorHandler;

/**
 * Configures the error handler.
 *
 * @final
 *
 * @internal
 */
class ErrorHandlerConfigurator
{
    private ?LoggerInterface $logger;
    private ?LoggerInterface $deprecationLogger;
    private array|int|null $levels;
    private ?int $throwAt;
    private bool $scream;
    private bool $scope;

    /**
     * @param array|int|null $levels  An array map of E_* to LogLevel::* or an integer bit field of E_* constants
     * @param int|null       $throwAt Thrown errors in a bit field of E_* constants, or null to keep the current value
     * @param bool           $scream  Enables/disables screaming mode, where even silenced errors are logged
     * @param bool           $scope   Enables/disables scoping mode
     */
    public function __construct(?LoggerInterface $logger = null, array|int|null $levels = \E_ALL, ?int $throwAt = \E_ALL, bool $scream = true, bool $scope = true, ?LoggerInterface $deprecationLogger = null)
    {
        $this->logger = $logger;
        $this->levels = $levels ?? \E_ALL;
        $this->throwAt = \is_int($throwAt) ? $throwAt : (null === $throwAt ? null : ($throwAt ? \E_ALL : null));
        $this->scream = $scream;
        $this->scope = $scope;
        $this->deprecationLogger = $deprecationLogger;
    }

    /**
     * Configures the error handler.
     */
    public function configure(ErrorHandler $handler): void
    {
        if ($this->logger || $this->deprecationLogger) {
            $this->setDefaultLoggers($handler);
            if (\is_array($this->levels)) {
                $levels = 0;
                foreach ($this->levels as $type => $log) {
                    $levels |= $type;
                }
            } else {
                $levels = $this->levels;
            }

            if ($this->scream) {
                $handler->screamAt($levels);
            }
            if ($this->scope) {
                $handler->scopeAt($levels & ~\E_USER_DEPRECATED & ~\E_DEPRECATED);
            } else {
                $handler->scopeAt(0, true);
            }
            $this->logger = $this->deprecationLogger = $this->levels = null;
        }
        if (null !== $this->throwAt) {
            $handler->throwAt($this->throwAt, true);
        }
    }

    private function setDefaultLoggers(ErrorHandler $handler): void
    {
        if (\is_array($this->levels)) {
            $levelsDeprecatedOnly = [];
            $levelsWithoutDeprecated = [];
            foreach ($this->levels as $type => $log) {
                if (\E_DEPRECATED == $type || \E_USER_DEPRECATED == $type) {
                    $levelsDeprecatedOnly[$type] = $log;
                } else {
                    $levelsWithoutDeprecated[$type] = $log;
                }
            }
        } else {
            $levelsDeprecatedOnly = $this->levels & (\E_DEPRECATED | \E_USER_DEPRECATED);
            $levelsWithoutDeprecated = $this->levels & ~\E_DEPRECATED & ~\E_USER_DEPRECATED;
        }

        $defaultLoggerLevels = $this->levels;
        if ($this->deprecationLogger && $levelsDeprecatedOnly) {
            $handler->setDefaultLogger($this->deprecationLogger, $levelsDeprecatedOnly);
            $defaultLoggerLevels = $levelsWithoutDeprecated;
        }

        if ($this->logger && $defaultLoggerLevels) {
            $handler->setDefaultLogger($this->logger, $defaultLoggerLevels);
        }
    }
}
                                                                                                                                                                                                                                                                                                                                                                                 �PNG

   IHDR   <   <   :��r   	pHYs     ��   sRGB ���   gAMA  ���a  �IDATx�MhA��3���иms+H� �d����L��ςD�A�7=zQ�z���^l/""أ��Sڌ�&1�l>HM7���dv~0�ff��o����<�x^ʫ�=/�i��(r��=�@���}>��f���NՀ�8�!���
�6��"��%��G$6�!��}*y�q�岿���m�����J_�T\=,N�8�F�/,�jۂ�e�k�e�8��ז�V>[{G�߃��b��i�~ցk�U���~p԰.>�|$�?�i(� 0�).pZ�3��>��L!"�h��=Yu��V��DN�h�΀e.����AW _�A���o�,̎���?6	~*��@O0]��߰�`'-ӱ�M�
6i�+N�nv:�}��[�[���{�02�:�����K}r�E���&xW)9�.v�2+�t�`ӱ�M�
6+�t��?b���.�һ=�c��/k�EKpm~r�3=���r�ħ����R�U�z�VX�;��ϡKxi�� ���l:Jp�A
.#$��%΀ED� �X3������B��0���/�R�e��Y�
\WGA
����N����C��ob9��9*'�q�A� B�{����+�园�Y-e���"hy���c5(��N����%e鸛|L�Fm+��:Ál~,�Ϟl�Nz
if�dԮ��F��[�W��)8��j�	��"�����    IEND�B`�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller;

use Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Renders error or exception pages from a given FlattenException.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ErrorController
{
    private HttpKernelInterface $kernel;
    private string|object|array|null $controller;
    private ErrorRendererInterface $errorRenderer;

    public function __construct(HttpKernelInterface $kernel, string|object|array|null $controller, ErrorRendererInterface $errorRenderer)
    {
        $this->kernel = $kernel;
        $this->controller = $controller;
        $this->errorRenderer = $errorRenderer;
    }

    public function __invoke(\Throwable $exception): Response
    {
        $exception = $this->errorRenderer->render($exception);

        return new Response($exception->getA