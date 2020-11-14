<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e;

use _PhpScoperecb978830f1e\SebastianBergmann\Diff\Differ;
use _PhpScoperecb978830f1e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperecb978830f1e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperecb978830f1e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperecb978830f1e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
