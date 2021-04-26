<?php

declare (strict_types=1);
namespace _PhpScoper85e989d55df2;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoper85e989d55df2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
