<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use _PhpScoperaac5f7c652e4\SebastianBergmann\Diff\Differ;
use _PhpScoperaac5f7c652e4\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperaac5f7c652e4\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperaac5f7c652e4\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
