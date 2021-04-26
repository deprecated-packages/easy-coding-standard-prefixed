<?php

declare (strict_types=1);
namespace _PhpScoperd51690aa3091;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperd51690aa3091\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
