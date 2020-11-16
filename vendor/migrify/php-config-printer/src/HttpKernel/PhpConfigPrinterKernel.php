<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\HttpKernel;

use _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel;
use _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle;
use _PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface;
final class PhpConfigPrinterKernel extends \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\HttpKernel\AbstractMigrifyKernel implements \Symplify\PackageBuilder\Contract\HttpKernel\ExtraConfigAwareKernelInterface
{
    /**
     * @var string[]
     */
    private $configs = [];
    public function registerContainerConfiguration(\_PhpScoperedc2e0c967db\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
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
        return [new \_PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Bundle\PhpConfigPrinterBundle()];
    }
    /**
     * @param string[] $configs
     */
    public function setConfigs(array $configs) : void
    {
        $this->configs = $configs;
    }
}
