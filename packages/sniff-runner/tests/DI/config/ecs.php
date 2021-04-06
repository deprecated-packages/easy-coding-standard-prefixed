<?php

declare (strict_types=1);
namespace _PhpScoper255a4eaff575;

use _PhpScoper255a4eaff575\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\SniffRunner\Tests\DI\Source\AnotherSniff;
return static function (\_PhpScoper255a4eaff575\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\EasyCodingStandard\SniffRunner\Tests\DI\Source\AnotherSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
