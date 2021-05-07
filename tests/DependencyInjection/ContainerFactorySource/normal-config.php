<?php

declare (strict_types=1);
namespace _PhpScoper91fe47cd7f25;

use _PhpScoper91fe47cd7f25\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper91fe47cd7f25\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
