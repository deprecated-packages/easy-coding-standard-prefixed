<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Bundle;

use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard;
use _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class PhpConfigPrinterBundle extends \_PhpScoper3e1e0e5bb8ef\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $this->registerDefaultImplementations($containerBuilder);
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension();
    }
    private function registerDefaultImplementations(\_PhpScoper3e1e0e5bb8ef\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // set default implementations, if none provided - for better developer experience out of the box
        if (!$containerBuilder->has(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class)) {
            $containerBuilder->autowire(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class);
        }
        if (!$containerBuilder->has(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class)) {
            $containerBuilder->autowire(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class, \_PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class);
        }
    }
}
