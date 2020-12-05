<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperc83f84c90b60\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc83f84c90b60\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperc83f84c90b60\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperc83f84c90b60\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperc83f84c90b60\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperc83f84c90b60\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperc83f84c90b60\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperc83f84c90b60\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperc83f84c90b60\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
