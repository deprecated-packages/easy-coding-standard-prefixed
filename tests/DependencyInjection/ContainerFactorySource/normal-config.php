<?php

declare (strict_types=1);
namespace _PhpScopera22bb3f4d7b7;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera22bb3f4d7b7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
