<?php

declare (strict_types=1);
namespace _PhpScoper86aebf8cf357;

use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use _PhpScoper86aebf8cf357\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
return static function (\_PhpScoper86aebf8cf357\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(\Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION, \Symplify\EasyCodingStandard\ValueObject\Option::INDENTATION_SPACES);
};
