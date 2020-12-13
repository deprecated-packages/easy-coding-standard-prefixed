<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\DependencyInjection;

use _PhpScoperd3d57724c802\Symfony\Component\Config\FileLocator as SimpleFileLocator;
use _PhpScoperd3d57724c802\Symfony\Component\Config\Loader\DelegatingLoader;
use _PhpScoperd3d57724c802\Symfony\Component\Config\Loader\GlobFileLoader;
use _PhpScoperd3d57724c802\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Config\FileLocator;
use _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\KernelInterface;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
final class DelegatingLoaderFactory
{
    public function createFromContainerBuilderAndKernel(\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\KernelInterface $kernel) : \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $kernelFileLocator = new \_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Config\FileLocator($kernel);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $kernelFileLocator);
    }
    /**
     * For tests
     */
    public function createContainerBuilderAndConfig(\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, string $config) : \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $directory = \dirname($config);
        $fileLocator = new \_PhpScoperd3d57724c802\Symfony\Component\Config\FileLocator($directory);
        return $this->createFromContainerBuilderAndFileLocator($containerBuilder, $fileLocator);
    }
    private function createFromContainerBuilderAndFileLocator(\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder, \_PhpScoperd3d57724c802\Symfony\Component\Config\FileLocator $simpleFileLocator) : \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\DelegatingLoader
    {
        $loaders = [new \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\GlobFileLoader($simpleFileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $simpleFileLocator)];
        $loaderResolver = new \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        return new \_PhpScoperd3d57724c802\Symfony\Component\Config\Loader\DelegatingLoader($loaderResolver);
    }
}
