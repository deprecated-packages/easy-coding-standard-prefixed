<?php

declare (strict_types=1);
namespace _PhpScoper8a1ea80774eb;

use _PhpScoper8a1ea80774eb\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
