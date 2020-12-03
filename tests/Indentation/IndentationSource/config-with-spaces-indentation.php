<?php

declare (strict_types=1);
namespace _PhpScoper5465fda93cc7;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION, \Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION_SPACES);
};
