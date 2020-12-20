<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection\CompilerPass;

use PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use PhpCsFixer\WhitespacesFixerConfig;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Reference;
final class FixerWhitespaceConfigCompilerPass implements \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public function process(\_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $definitions = $containerBuilder->getDefinitions();
        foreach ($definitions as $definition) {
            if ($definition->getClass() === null) {
                continue;
            }
            if (!\is_a($definition->getClass(), \PhpCsFixer\Fixer\WhitespacesAwareFixerInterface::class, \true)) {
                continue;
            }
            $definition->addMethodCall('setWhitespacesConfig', [new \_PhpScoperba24099fc6fd\Symfony\Component\DependencyInjection\Reference(\PhpCsFixer\WhitespacesFixerConfig::class)]);
        }
    }
}
