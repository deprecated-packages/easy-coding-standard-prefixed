<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71;

use _PhpScopera9d6b451df71\SebastianBergmann\Diff\Differ;
use _PhpScopera9d6b451df71\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScopera9d6b451df71\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScopera9d6b451df71\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScopera9d6b451df71\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
