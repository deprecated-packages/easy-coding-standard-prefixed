<?php

declare (strict_types=1);
namespace _PhpScoperb383f16e851e;

use _PhpScoperb383f16e851e\SebastianBergmann\Diff\Differ;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb383f16e851e\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb383f16e851e\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};