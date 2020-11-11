<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\HttpKernel;

use _PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel;
use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoper0f5cd390c37a\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoper0f5cd390c37a\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface;
final class PhpConfigPrinterKernel extends \_PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel implements \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface
{
    /**
     * @var string[]
     */
    private $configs = [];
    public function registerContainerConfiguration(\_PhpScoper0f5cd390c37a\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
        foreach ($this->configs as $config) {
            $loader->load($config);
        }
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [new \_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void
    {
        $this->configs = $configs;
    }
}
