<?php

declare (strict_types=1);
namespace _PhpScoper1b2f8b9c0339;

use _PhpScoper1b2f8b9c0339\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
