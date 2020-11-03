<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
