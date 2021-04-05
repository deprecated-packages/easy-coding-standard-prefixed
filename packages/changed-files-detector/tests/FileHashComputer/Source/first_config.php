<?php

declare (strict_types=1);
namespace _PhpScoper457dd3bd73ba;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper457dd3bd73ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper457dd3bd73ba\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class);
};
