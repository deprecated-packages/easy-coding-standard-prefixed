<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperbcc0395698f8\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class)->call('configure', [['target' => '5.5']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class)->call('configure', [['target' => '6.0']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '4.3']]);
};
