<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\DependencyInjection\Extension;

use _PhpScopercda2b863d098\Symfony\Component\Config\FileLocator;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\Extension;
use _PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
final class PhpConfigPrinterExtension extends \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Extension\Extension
{
    public function load(array $configs, \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\ContainerBuilder $containerBuilder) : void
    {
        // needed for parameter shifting of sniff/fixer params
        $phpFileLoader = new \_PhpScopercda2b863d098\Symfony\Component\DependencyInjection\Loader\PhpFileLoader($containerBuilder, new \_PhpScopercda2b863d098\Symfony\Component\Config\FileLocator(__DIR__ . '/../../../config'));
        $phpFileLoader->load('config.php');
    }
}
