<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperddde3ba4aebc\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperddde3ba4aebc\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperddde3ba4aebc\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperddde3ba4aebc\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperddde3ba4aebc\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
