<?php

declare (strict_types=1);
namespace _PhpScoper6ffa0951a2e9;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper6ffa0951a2e9\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
