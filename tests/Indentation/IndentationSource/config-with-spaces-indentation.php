<?php

declare (strict_types=1);
namespace _PhpScoper8a1ea80774eb;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoper8a1ea80774eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_SPACES);
};
