<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperb09c3ec8e01a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
