<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\ChangedFilesDetector;

use _PhpScoperfb0714773dc5\Symfony\Component\Config\FileLocator;
use _PhpScoperfb0714773dc5\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\GlobFileLoader;
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
        $containerBuilder = new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder();
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
        $serializedArray = \serialize($array);
        return \md5($serializedArray);
    }
    private function createLoader(string $filePath, \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : \_PhpScoperfb0714773dc5\Symfony\Component\Config\Loader\LoaderInterface
    {
        $fileLocator = new \_PhpScoperfb0714773dc5\Symfony\Component\Config\FileLocator([\dirname($filePath)]);
        $loaders = [new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Loader\GlobFileLoader($containerBuilder, $fileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $fileLocator)];
        $loaderResolver = new \_PhpScoperfb0714773dc5\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        $loader = $loaderResolver->resolve($filePath);
        if (!$loader) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return $loader;
    }
}
