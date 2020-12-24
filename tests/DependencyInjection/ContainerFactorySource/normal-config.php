<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera37d6fb0b1ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
