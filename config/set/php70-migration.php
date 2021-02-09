<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b;

use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use _PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper807f8e74693b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    \trigger_error('ECS set PHP_70_MIGRATION is deprecated. Use more advanced and precise Rector instead (http://github.com/rectorphp/rector)');
    \sleep(3);
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer::class);
};
