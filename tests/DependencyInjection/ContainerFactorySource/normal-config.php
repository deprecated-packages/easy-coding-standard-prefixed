<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper229e8121cf9f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
