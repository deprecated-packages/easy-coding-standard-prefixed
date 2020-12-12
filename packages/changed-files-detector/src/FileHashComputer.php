<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\ChangedFilesDetector;

use _PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator;
use _PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\GlobFileLoader;
use Symplify\EasyCodingStandard\Exception\Configuration\FileNotFoundException;
use Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
/**
 * @see \Symplify\EasyCodingStandard\ChangedFilesDetector\Tests\FileHashComputerTest
 */
final class FileHashComputer
{
    public function computeConfig(string $filePath) : string
    {
        $containerBuilder = new \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder();
        $loader = $this->createLoader($filePath, $containerBuilder);
        $loader->load($filePath);
        $parameterBag = $containerBuilder->getParameterBag();
        return $this->arrayToHash($containerBuilder->getDefinitions()) . $this->arrayToHash($parameterBag->all());
    }
    public function compute(string $filePath) : string
    {
        $fileHash = \md5_file($filePath);
        if (!$fileHash) {
            throw new \Symplify\EasyCodingStandard\Exception\Configuration\FileNotFoundException(\sprintf('File "%s" was not found', $fileHash));
        }
        return $fileHash;
    }
    /**
     * @param mixed[] $array
     */
    private function arrayToHash(array $array) : string
    {
        return \md5(\serialize($array));
    }
    private function createLoader(string $filePath, \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderInterface
    {
        $fileLocator = new \_PhpScoperdaf95aff095b\Symfony\Component\Config\FileLocator([\dirname($filePath)]);
        $loaders = [new \_PhpScoperdaf95aff095b\Symfony\Component\DependencyInjection\Loader\GlobFileLoader($containerBuilder, $fileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $fileLocator)];
        $loaderResolver = new \_PhpScoperdaf95aff095b\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        $loader = $loaderResolver->resolve($filePath);
        if (!$loader) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return $loader;
    }
}
