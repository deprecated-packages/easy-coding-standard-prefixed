<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Composer;

use _PhpScoperf3dc21757def\Composer\Autoload\ClassLoader;
use _PhpScoperf3dc21757def\Nette\Utils\Strings;
use ReflectionClass;
/**
 * @see \Symplify\PackageBuilder\Tests\Composer\VendorDirProviderTest
 */
final class VendorDirProvider
{
    public function provide() : string
    {
        $rootFolder = \getenv('SystemDrive', \true) . \DIRECTORY_SEPARATOR;
        $path = __DIR__;
        while (!\_PhpScoperf3dc21757def\Nette\Utils\Strings::endsWith($path, 'vendor') && $path !== $rootFolder) {
            $path = \dirname($path);
        }
        if ($path !== $rootFolder) {
            return $path;
        }
        return $this->reflectionFallback();
    }
    private function reflectionFallback() : string
    {
        $reflectionClass = new \ReflectionClass(\_PhpScoperf3dc21757def\Composer\Autoload\ClassLoader::class);
        return \dirname($reflectionClass->getFileName(), 2);
    }
}
