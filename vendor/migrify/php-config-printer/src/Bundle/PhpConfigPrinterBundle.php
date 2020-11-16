<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Bundle;

use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard;
use _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class PhpConfigPrinterBundle extends \_PhpScoperbcc0395698f8\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $this->registerDefaultImplementations($containerBuilder);
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension();
    }
    private function registerDefaultImplementations(\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // set default implementations, if none provided - for better developer experience out of the box
        if (!$containerBuilder->has(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class);
        }
        if (!$containerBuilder->has(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class, \_PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class);
        }
    }
}
