<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\HttpKernel;

use _PhpScoperfacc742d2745\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel;
use _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperfacc742d2745\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface;
final class PhpConfigPrinterKernel extends \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel implements \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface
{
    /**
     * @var string[]
     */
    private $configs = [];
    public function registerContainerConfiguration(\_PhpScoperfacc742d2745\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
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
        return [new \_PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void
    {
        $this->configs = $configs;
    }
}
