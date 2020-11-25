<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperca8ca183ac38\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperca8ca183ac38\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperca8ca183ac38\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperca8ca183ac38\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperca8ca183ac38\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperca8ca183ac38\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
