<?php

declare (strict_types=1);
namespace _PhpScoperf5f75c22067b;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer::class)->call('configure', [['target' => '7.5']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class)->call('configure', [['target' => '5.5']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class)->call('configure', [['target' => '6.0']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '4.3']]);
};
