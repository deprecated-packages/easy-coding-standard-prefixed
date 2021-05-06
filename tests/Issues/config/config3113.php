<?php

declare (strict_types=1);
namespace _PhpScoper890197fe38f7;

use _PhpScoper890197fe38f7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
