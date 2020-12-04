<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera04bf8e97c06\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
