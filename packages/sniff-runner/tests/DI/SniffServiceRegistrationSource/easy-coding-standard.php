<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6a0a7eb6e565\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
