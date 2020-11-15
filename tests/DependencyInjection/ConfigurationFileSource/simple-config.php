<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper49c742f5a4ee\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
