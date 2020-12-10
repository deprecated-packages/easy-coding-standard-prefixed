<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f;

use _PhpScoperb458b528613f\SebastianBergmann\Diff\Differ;
use _PhpScoperb458b528613f\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb458b528613f\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb458b528613f\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
