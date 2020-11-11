<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Bundle;

use _PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper0f5cd390c37a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\CodingStandard\DependencyInjection\Extension\SymplifyCodingStandardExtension;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class SymplifyCodingStandardBundle extends \_PhpScoper0f5cd390c37a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper0f5cd390c37a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\CodingStandard\DependencyInjection\Extension\SymplifyCodingStandardExtension();
    }
}
