<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2;

use _PhpScoperf3db63c305b2\SebastianBergmann\Diff\Differ;
use _PhpScoperf3db63c305b2\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperf3db63c305b2\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperf3db63c305b2\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperf3db63c305b2\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
