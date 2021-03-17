<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper0c0702cca4ac\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHPUNIT_56_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer::class)->call('configure', [['target' => '5.5']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer::class)->call('configure', [['target' => '4.8']]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '4.3']]);
};
