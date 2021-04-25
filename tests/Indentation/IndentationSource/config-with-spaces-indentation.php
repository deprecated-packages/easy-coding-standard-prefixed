<?php

declare (strict_types=1);
namespace _PhpScoper27cac5a8b4ab;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoper27cac5a8b4ab\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_SPACES);
};
