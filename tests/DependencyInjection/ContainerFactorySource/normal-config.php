<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper10b1b2c5ca55\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
