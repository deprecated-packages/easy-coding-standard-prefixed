<?php

declare (strict_types=1);
namespace _PhpScoper207eb8f99af3\Migrify\MigrifyKernel\Bundle;

use _PhpScoper207eb8f99af3\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass;
use _PhpScoper207eb8f99af3\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension;
use _PhpScoper207eb8f99af3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper207eb8f99af3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper207eb8f99af3\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class MigrifyKernelBundle extends \_PhpScoper207eb8f99af3\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper207eb8f99af3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
        $containerBuilder->addCompilerPass(new \_PhpScoper207eb8f99af3\Migrify\MigrifyKernel\DependencyInjection\CompilerPass\PrepareConsoleApplicationCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper207eb8f99af3\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper207eb8f99af3\Migrify\MigrifyKernel\DependencyInjection\Extension\MigrifyKernelExtension();
    }
}
