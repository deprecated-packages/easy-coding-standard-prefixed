<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Bundle;

use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\CodingStandard\DependencyInjection\Extension\SymplifyCodingStandardExtension;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class SymplifyCodingStandardBundle extends \_PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperd35c27cd4b09\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \Symplify\CodingStandard\DependencyInjection\Extension\SymplifyCodingStandardExtension();
    }
}
