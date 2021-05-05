<?php

declare (strict_types=1);
namespace _PhpScoperef2f7aa3581e;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoperef2f7aa3581e\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::INDENTATION, Option::INDENTATION_SPACES);
};
