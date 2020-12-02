<?php

declare (strict_types=1);
namespace _PhpScoper2d2a405cc0f8;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper2d2a405cc0f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2d2a405cc0f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
