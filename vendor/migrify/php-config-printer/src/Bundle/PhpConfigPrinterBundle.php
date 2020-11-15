<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Bundle;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard;
use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScopera189153e1f79\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class PhpConfigPrinterBundle extends \_PhpScopera189153e1f79\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $this->registerDefaultImplementations($containerBuilder);
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension();
    }
    private function registerDefaultImplementations(\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // set default implementations, if none provided - for better developer experience out of the box
        if (!$containerBuilder->has(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class)) {
            $containerBuilder->autowire(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class);
        }
        if (!$containerBuilder->has(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class)) {
            $containerBuilder->autowire(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class, \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class);
        }
    }
}
