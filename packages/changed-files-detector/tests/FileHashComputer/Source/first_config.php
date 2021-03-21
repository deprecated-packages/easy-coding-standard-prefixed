<?php

declare (strict_types=1);
namespace _PhpScoper8583deb8ab74;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper8583deb8ab74\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8583deb8ab74\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
