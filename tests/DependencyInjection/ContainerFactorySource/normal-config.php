<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbaf90856897c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
