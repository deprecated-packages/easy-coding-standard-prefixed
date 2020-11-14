<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Bundle;

use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class PhpConfigPrinterBundle extends \_PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $this->registerDefaultImplementations($containerBuilder);
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension();
    }
    private function registerDefaultImplementations(\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // set default implementations, if none provided - for better developer experience out of the box
        if (!$containerBuilder->has(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class);
        }
        if (!$containerBuilder->has(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class, \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class);
        }
    }
}
