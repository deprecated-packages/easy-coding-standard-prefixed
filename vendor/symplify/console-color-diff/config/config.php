<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a;

use _PhpScoperc4b135661b3a\SebastianBergmann\Diff\Differ;
use _PhpScoperc4b135661b3a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use function _PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref;
return static function (\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire()->autoconfigure();
    $services->load('Symplify\\ConsoleColorDiff\\', __DIR__ . '/../src');
    $services->set(\_PhpScoperc4b135661b3a\SebastianBergmann\Diff\Differ::class);
    $services->set(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class);
    $services->set(\_PhpScoperc4b135661b3a\Symfony\Component\Console\Style\SymfonyStyle::class)->factory([\_PhpScoperc4b135661b3a\Symfony\Component\DependencyInjection\Loader\Configurator\ref(\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory::class), 'create']);
};
