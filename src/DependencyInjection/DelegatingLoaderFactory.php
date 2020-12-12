<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
