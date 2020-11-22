<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperfacc742d2745\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperfacc742d2745\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperfacc742d2745\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfacc742d2745\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperfacc742d2745\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperfacc742d2745\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperfacc742d2745\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
