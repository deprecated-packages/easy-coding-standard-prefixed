<?php

declare (strict_types=1);
namespace _PhpScoperef2f7aa3581e;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperef2f7aa3581e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(LineLengthSniff::class);
};
