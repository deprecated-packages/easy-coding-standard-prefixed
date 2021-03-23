<?php

declare (strict_types=1);
namespace _PhpScoper70e3784a2d21;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper70e3784a2d21\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper70e3784a2d21\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
