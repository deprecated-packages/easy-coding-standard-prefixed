<?php

declare (strict_types=1);
namespace _PhpScoperdb89411b20b4;

use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use _PhpScoperdb89411b20b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DeclareStrictTypesFixer::class);
};
