<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper1e80a2e03314\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
