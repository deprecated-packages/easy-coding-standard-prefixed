<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperfaaf57618f34\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
