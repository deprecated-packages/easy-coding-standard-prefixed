<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a;

use _PhpScoperb09c3ec8e01a\SebastianBergmann\Diff\Differ;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperb09c3ec8e01a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperb09c3ec8e01a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
