<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147;

use _PhpScoperba5852cc6147\SebastianBergmann\Diff\Differ;
use _PhpScoperba5852cc6147\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use function _PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (\_PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperba5852cc6147\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperba5852cc6147\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperba5852cc6147\Symfony\Component\DependencyInjection\Loader\Configurator\service(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
    $services->set(\Symplify\PackageBuilder\Reflection\PrivatesAccessor::class);
};
