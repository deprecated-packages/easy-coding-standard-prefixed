<?php

declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNamespacedFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitNoExpectationAnnotationFixer;
use _PhpScopercfeba9d8ad31\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHPUNIT_52_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(PhpUnitDedicateAssertFixer::class);
    $services->set(PhpUnitExpectationFixer::class)->call('configure', [['target' => '5.2']]);
    $services->set(PhpUnitNamespacedFixer::class)->call('configure', [['target' => '4.8']]);
    $services->set(PhpUnitNoExpectationAnnotationFixer::class)->call('configure', [['target' => '4.3']]);
};
