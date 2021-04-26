<?php

declare (strict_types=1);
namespace _PhpScoperd2a667bd5a98;

use PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff;
use _PhpScoperd2a667bd5a98\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(GitMergeConflictSniff::class);
};
