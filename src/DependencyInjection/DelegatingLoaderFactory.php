<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoper3f3a54dd086f\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper3f3a54dd086f\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoper3f3a54dd086f\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper3f3a54dd086f\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoper3f3a54dd086f\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoper3f3a54dd086f\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoper3f3a54dd086f\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoper3f3a54dd086f\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoper3f3a54dd086f\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
