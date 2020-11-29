<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d;

use _PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff;
return static function (\_PhpScopercae980ebf12d\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff::class);
};
