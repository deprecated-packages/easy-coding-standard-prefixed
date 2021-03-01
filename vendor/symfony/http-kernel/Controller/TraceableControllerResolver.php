<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Controller;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Stopwatch\Stopwatch;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TraceableControllerResolver implements \_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Controller\ControllerResolverInterface
{
    private $resolver;
    private $stopwatch;
    public function __construct(\_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Controller\ControllerResolverInterface $resolver, \_PhpScoperc4ea0f0bd23f\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->resolver = $resolver;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function getController(\_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpFoundation\Request $request)
    {
        $e = $this->stopwatch->start('controller.get_callable');
        $ret = $this->resolver->getController($request);
        $e->stop();
        return $ret;
    }
}
