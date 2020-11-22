<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera88a8b9f064a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class)->property('lineLimit', 15)->property('absoluteLineLimit', [
        // just test array of annotations
        '@author',
    ]);
};
