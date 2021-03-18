<?php

declare (strict_types=1);
namespace _PhpScoper0b185984cfb7;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0b185984cfb7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
