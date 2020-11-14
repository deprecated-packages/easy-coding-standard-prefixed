<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\HttpKernel;

use _PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel;
use _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperb09c3ec8e01a\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface;
final class PhpConfigPrinterKernel extends \_PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel implements \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface
{
    /**
     * @var string[]
     */
    private $configs = [];
    public function registerContainerConfiguration(\_PhpScoperb09c3ec8e01a\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
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
        return [new \_PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void
    {
        $this->configs = $configs;
    }
}
