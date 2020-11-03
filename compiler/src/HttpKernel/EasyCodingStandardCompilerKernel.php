<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\HttpKernel;

use _PhpScoper3d04c8135695\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoper3d04c8135695\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use _PhpScoper3d04c8135695\Symfony\Component\HttpKernel\Kernel;
use Symplify\ConsoleColorDiff\ConsoleColorDiffBundle;
final class EasyCodingStandardCompilerKernel extends \_PhpScoper3d04c8135695\Symfony\Component\HttpKernel\Kernel
{
    public function getCacheDir() : string
    {
        // manually configured, so it can be replaced in phar
        return \sys_get_temp_dir() . '/_ecs_compiler';
    }
    public function getLogDir() : string
    {
        // manually configured, so it can be replaced in phar
        return \sys_get_temp_dir() . '/_ecs_compiler_log';
    }
    public function registerContainerConfiguration(\_PhpScoper3d04c8135695\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : array
    {
        return [new \Symplify\ConsoleColorDiff\ConsoleColorDiffBundle()];
    }
}
