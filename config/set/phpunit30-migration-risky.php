<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use _PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperd3d57724c802\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '3.0']]);
};
