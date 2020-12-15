<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use _PhpScoper47644ab3aa9a\Symfony\Component\HttpFoundation\Request;
use _PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use _PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use _PhpScoper47644ab3aa9a\Symfony\Component\Stopwatch\Stopwatch;
/**
 * Provides timing information via the stopwatch.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class TraceableValueResolver implements \_PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface
{
    private $inner;
    private $stopwatch;
    public function __construct(\_PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface $inner, \_PhpScoper47644ab3aa9a\Symfony\Component\Stopwatch\Stopwatch $stopwatch)
    {
        $this->inner = $inner;
        $this->stopwatch = $stopwatch;
    }
    /**
     * {@inheritdoc}
     */
    public function supports(\_PhpScoper47644ab3aa9a\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : bool
    {
        $method = \get_class($this->inner) . '::' . __FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');
        $return = $this->inner->supports($request, $argument);
        $this->stopwatch->stop($method);
        return $return;
    }
    /**
     * {@inheritdoc}
     */
    public function resolve(\_PhpScoper47644ab3aa9a\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper47644ab3aa9a\Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata $argument) : iterable
    {
        $method = \get_class($this->inner) . '::' . __FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');
        yield from $this->inner->resolve($request, $argument);
        $this->stopwatch->stop($method);
    }
}
