<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
