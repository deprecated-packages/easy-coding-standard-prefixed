<?php

declare (strict_types=1);
namespace _PhpScoper96c81c3c1716;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertInternalTypeFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMockFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHPUNIT_75_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(PhpUnitDedicateAssertInternalTypeFixer::class)->call('configure', [['target' => '7.5']]);
    $services->set(PhpUnitExpectationFixer::class)->call('configure', [['target' => '5.6']]);
    $services->set(PhpUnitMockFixer::class)->call('configure', [['target' => '5.5']]);
    $services->set(PhpUnitNamespacedFixer::class)->call('configure', [['target' => '6.0']]);
    $services->set(PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '4.3']]);
};
