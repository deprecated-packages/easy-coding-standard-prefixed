<?php

declare (strict_types=1);
namespace Symplify\EasyTesting\HttpKernel;

use _PhpScoper255a4eaff575\Symfony\Component\Config\Loader\LoaderInterface;
use Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class EasyTestingKernel extends \Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    public function registerContainerConfiguration(\_PhpScoper255a4eaff575\Symfony\Component\Config\Loader\LoaderInterface $loader) : void
    {
        $loader->load(__DIR__ . '/../../config/config.php');
    }
}
