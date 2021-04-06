<?php

declare (strict_types=1);
namespace _PhpScoper255a4eaff575;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper255a4eaff575\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper255a4eaff575\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
