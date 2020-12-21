<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4;

use _PhpScoperb730595bc9f4\SebastianBergmann\Diff\Differ;
use _PhpScoperb730595bc9f4\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb730595bc9f4\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb730595bc9f4\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb730595bc9f4\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
