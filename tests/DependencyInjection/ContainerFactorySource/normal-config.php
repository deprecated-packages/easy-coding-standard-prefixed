<?php

declare (strict_types=1);
namespace _PhpScoper78e1a27e740b;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper78e1a27e740b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
