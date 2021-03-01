<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f;

use PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc4ea0f0bd23f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHPUNIT_30_MIGRATION_RISKY is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitDedicateAssertFixer::class)->call('configure', [['target' => '3.0']]);
};
