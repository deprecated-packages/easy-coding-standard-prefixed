<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScopereb8678af2407\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScopereb8678af2407\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScopereb8678af2407\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScopereb8678af2407\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopereb8678af2407\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScopereb8678af2407\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopereb8678af2407\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScopereb8678af2407\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScopereb8678af2407\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScopereb8678af2407\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScopereb8678af2407\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScopereb8678af2407\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
