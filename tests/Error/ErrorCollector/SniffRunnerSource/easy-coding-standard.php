<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f;

use _PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff;
return static function (\_PhpScoperb458b528613f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\CodingStandard\Sniffs\Debug\CommentedOutCodeSniff::class);
};
