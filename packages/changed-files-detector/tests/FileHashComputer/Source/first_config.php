<?php

declare (strict_types=1);
namespace _PhpScoper3c44535fe75f;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper3c44535fe75f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
