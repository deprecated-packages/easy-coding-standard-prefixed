<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Bundle;

use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard;
use _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
/**
 * This class is dislocated in non-standard location, so it's not added by symfony/flex
 * to bundles.php and cause app to crash. See https://github.com/symplify/symplify/issues/1952#issuecomment-628765364
 */
final class PhpConfigPrinterBundle extends \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Bundle\Bundle
{
    public function build(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $this->registerDefaultImplementations($containerBuilder);
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
    protected function createContainerExtension() : ?\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\Extension\ExtensionInterface
    {
        return new \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\DependencyInjection\Extension\PhpConfigPrinterExtension();
    }
    private function registerDefaultImplementations(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // set default implementations, if none provided - for better developer experience out of the box
        if (!$containerBuilder->has(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface::class, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummyYamlFileContentProvider::class);
        }
        if (!$containerBuilder->has(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class)) {
            $containerBuilder->autowire(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class)->setPublic(\true);
            $containerBuilder->setAlias(\_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\SymfonyVersionFeatureGuardInterface::class, \_PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Dummy\DummySymfonyVersionFeatureGuard::class);
        }
    }
}
