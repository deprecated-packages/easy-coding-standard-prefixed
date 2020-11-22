<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperbc5235eb86f3\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperbc5235eb86f3\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperbc5235eb86f3\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperbc5235eb86f3\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperbc5235eb86f3\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
