<?php

declare (strict_types=1);
namespace _PhpScoper5cb8aea05893;

use _PhpScoper5cb8aea05893\SebastianBergmann\Diff\Differ;
use _PhpScoper5cb8aea05893\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoper5cb8aea05893\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoper5cb8aea05893\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoper5cb8aea05893\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
