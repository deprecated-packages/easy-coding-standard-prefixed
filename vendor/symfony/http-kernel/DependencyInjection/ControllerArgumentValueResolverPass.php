<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver;
use _PhpScoperba24099fc6fd\Symfony\Component\Stopwatch\Stopwatch;
/**
 * Gathers and configures the argument value resolvers.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ControllerArgumentValueResolverPass implements \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    use PriorityTaggedServiceTrait;
    private $argumentResolverService;
    private $argumentValueResolverTag;
    private $traceableResolverStopwatch;
    public function __construct(string $argumentResolverService = 'argument_resolver', string $argumentValueResolverTag = 'controller.argument_value_resolver', string $traceableResolverStopwatch = 'debug.stopwatch')
    {
        $this->argumentResolverService = $argumentResolverService;
        $this->argumentValueResolverTag = $argumentValueResolverTag;
        $this->traceableResolverStopwatch = $traceableResolverStopwatch;
    }
    public function process(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->argumentResolverService)) {
            return;
        }
        $resolvers = $this->findAndSortTaggedServices($this->argumentValueResolverTag, $container);
        if ($container->getParameter('kernel.debug') && \class_exists(\_PhpScoperba24099fc6fd\Symfony\Component\Stopwatch\Stopwatch::class) && $container->has($this->traceableResolverStopwatch)) {
            foreach ($resolvers as $resolverReference) {
                $id = (string) $resolverReference;
                $container->register("debug.{$id}", \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver::class)->setDecoratedService($id)->setArguments([new \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Reference("debug.{$id}.inner"), new \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Reference($this->traceableResolverStopwatch)]);
            }
        }
        $container->getDefinition($this->argumentResolverService)->replaceArgument(1, new \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Argument\IteratorArgument($resolvers));
    }
}
