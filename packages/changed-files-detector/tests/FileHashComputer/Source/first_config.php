<?php

declare (strict_types=1);
namespace _PhpScoper27cac5a8b4ab;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper27cac5a8b4ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
