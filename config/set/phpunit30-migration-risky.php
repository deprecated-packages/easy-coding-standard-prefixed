<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use _PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaac5f7c652e4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '3.0']]);
};
