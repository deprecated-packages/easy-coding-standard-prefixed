<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Reference;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface;
/**
 * Adds services tagged kernel.fragment_renderer as HTTP content rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FragmentRendererPass implements \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $handlerService;
    private $rendererTag;
    public function __construct(string $handlerService = 'fragment.handler', string $rendererTag = 'kernel.fragment_renderer')
    {
        $this->handlerService = $handlerService;
        $this->rendererTag = $rendererTag;
    }
    public function process(\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->handlerService)) {
            return;
        }
        $definition = $container->getDefinition($this->handlerService);
        $renderers = [];
        foreach ($container->findTaggedServiceIds($this->rendererTag, \true) as $id => $tags) {
            $def = $container->getDefinition($id);
            $class = $container->getParameterBag()->resolveValue($def->getClass());
            if (!($r = $container->getReflectionClass($class))) {
                throw new \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            }
            if (!$r->isSubclassOf(\_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class)) {
                throw new \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, \_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class));
            }
            foreach ($tags as $tag) {
                $renderers[$tag['alias']] = new \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Reference($id);
            }
        }
        $definition->replaceArgument(0, \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $renderers));
    }
}
