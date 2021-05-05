<?php

declare (strict_types=1);
namespace _PhpScoper53db80252f28;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper53db80252f28\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
