<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8a7636b3fdaf\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
