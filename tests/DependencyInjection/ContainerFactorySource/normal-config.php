<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdebd9d705540\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
