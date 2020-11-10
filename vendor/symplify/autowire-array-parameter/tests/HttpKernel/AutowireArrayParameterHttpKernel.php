<?php

declare (strict_types=1);
namespace Symplify\AutowireArrayParameter\Tests\HttpKernel;

use _PhpScopere5e7dca8c031\Symfony\Component\Config\Loader\LoaderInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Bundle\BundleInterface;
use _PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Kernel;
use Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass;
final class AutowireArrayParameterHttpKernel extends \_PhpScopere5e7dca8c031\Symfony\Component\HttpKernel\Kernel
{
    public function registerContainerConfiguration(\_PhpScopere5e7dca8c031\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../config/autowire_array_parameter.php');
    }
    public function getCacheDir() : string
    {
        return \sys_get_temp_dir() . '/autowire_array_parameter_test';
    }
    public function getLogDir() : string
    {
        return \sys_get_temp_dir() . '/autowire_array_parameter_test_log';
    }
    /**
     * @return BundleInterface[]
     */
    public function registerBundles() : iterable
    {
        return [];
    }
    protected function build(\_PhpScopere5e7dca8c031\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        $containerBuilder->addCompilerPass(new \Symplify\AutowireArrayParameter\DependencyInjection\CompilerPass\AutowireArrayParameterCompilerPass());
    }
}
