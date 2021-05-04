<?php

declare (strict_types=1);
namespace _PhpScoperc2b2a9bb0e13;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoperc2b2a9bb0e13\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_SPACES);
};
