<?php

declare (strict_types=1);
namespace _PhpScoper45e499ef5890;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper45e499ef5890\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper45e499ef5890\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
