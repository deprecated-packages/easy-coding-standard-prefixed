<?php

declare (strict_types=1);
namespace _PhpScoper9f8d5dcff860;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper9f8d5dcff860\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9f8d5dcff860\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
