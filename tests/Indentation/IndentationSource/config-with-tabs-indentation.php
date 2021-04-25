<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_TAB);
};
