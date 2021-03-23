<?php

declare (strict_types=1);
namespace _PhpScoperc7096eb2567d;

use PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff;
use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff::class);
};
