<?php

declare (strict_types=1);
namespace _PhpScoper08fb1f8a2f44;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper08fb1f8a2f44\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
