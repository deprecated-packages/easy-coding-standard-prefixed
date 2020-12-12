<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperef870243cfdb\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperef870243cfdb\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperef870243cfdb\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperef870243cfdb\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperef870243cfdb\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperef870243cfdb\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperef870243cfdb\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperef870243cfdb\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperef870243cfdb\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperef870243cfdb\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperef870243cfdb\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperef870243cfdb\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
