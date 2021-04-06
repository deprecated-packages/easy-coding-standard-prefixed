<?php

declare (strict_types=1);
namespace _PhpScoper8cb97064581a;

use PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff;
use _PhpScoper8cb97064581a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper8cb97064581a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff::class);
};
