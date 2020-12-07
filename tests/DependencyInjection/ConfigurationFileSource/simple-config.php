<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfa521053d812\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
