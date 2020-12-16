<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb6a8e65b492c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
