<?php

declare (strict_types=1);
namespace _PhpScoperd51690aa3091;

use _PhpScoperd51690aa3091\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
