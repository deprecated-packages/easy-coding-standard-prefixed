<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
};
