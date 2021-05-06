<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Bundle;

use _PhpScopere7e518ee6a5b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere7e518ee6a5b\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
use Symplify\CodingStandard\DependencyInjection\Extension\SymplifyCodingStandardExtension;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex to bundles.php and cause app to
 * crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class SymplifyCodingStandardBundle extends Bundle
{
    public function build(ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : SymplifyCodingStandardExtension
    {
        return new SymplifyCodingStandardExtension();
    }
}
