<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperaad82bb90a86\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperaad82bb90a86\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperaad82bb90a86\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperaad82bb90a86\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperaad82bb90a86\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperaad82bb90a86\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
