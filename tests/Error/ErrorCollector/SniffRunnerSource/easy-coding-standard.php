<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238;

use _PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff;
return static function (\_PhpScoperc7c7dddc9238\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff::class);
};
