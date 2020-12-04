<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera4fc793dae73\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
