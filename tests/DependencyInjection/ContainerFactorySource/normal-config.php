<?php

declare (strict_types=1);
namespace _PhpScopera609aff833be;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera609aff833be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera609aff833be\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
