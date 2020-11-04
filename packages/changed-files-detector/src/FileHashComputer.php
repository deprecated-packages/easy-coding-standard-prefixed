<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\ChangedFilesDetector;

use _PhpScoperb383f16e851e\Symfony\Component\Config\FileLocator;
use _PhpScoperb383f16e851e\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Config\Loader\LoaderResolver;
use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\GlobFileLoader;
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
        $containerBuilder = new \_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\ContainerBuilder();
        $loader = $this->createLoader($filePath, $containerBuilder);
        $loader->load($filePath);
        return $this->arrayToHash($containerBuilder->getDefinitions()) . $this->arrayToHash($containerBuilder->getParameterBag()->all());
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
    private function createLoader(string $filePath, \_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : \_PhpScoperb383f16e851e\Symfony\Component\Config\Loader\LoaderInterface
    {
        $fileLocator = new \_PhpScoperb383f16e851e\Symfony\Component\Config\FileLocator([\dirname($filePath)]);
        $loaders = [new \_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\GlobFileLoader($containerBuilder, $fileLocator), new \Symplify\PackageBuilder\DependencyInjection\FileLoader\ParameterMergingPhpFileLoader($containerBuilder, $fileLocator)];
        $loaderResolver = new \_PhpScoperb383f16e851e\Symfony\Component\Config\Loader\LoaderResolver($loaders);
        $loader = $loaderResolver->resolve($filePath);
        if (!$loader) {
            throw new \Symplify\SymplifyKernel\Exception\ShouldNotHappenException();
        }
        return $loader;
    }
}