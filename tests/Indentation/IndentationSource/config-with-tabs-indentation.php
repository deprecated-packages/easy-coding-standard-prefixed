<?php

declare (strict_types=1);
namespace _PhpScoper130a9a1cd4a2;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoper130a9a1cd4a2\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_TAB);
};
