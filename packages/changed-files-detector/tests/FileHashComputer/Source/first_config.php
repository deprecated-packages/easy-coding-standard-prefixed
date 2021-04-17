<?php

declare (strict_types=1);
namespace _PhpScoper0a055416a443;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper0a055416a443\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
