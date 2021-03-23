<?php

declare (strict_types=1);
namespace _PhpScoper4aefa5ecccc4;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper4aefa5ecccc4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4aefa5ecccc4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
