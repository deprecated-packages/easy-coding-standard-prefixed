<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper2f75f00bf6fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper2f75f00bf6fa\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
