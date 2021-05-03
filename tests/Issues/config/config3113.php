<?php

declare (strict_types=1);
namespace _PhpScoper7239e3eaf11a;

use _PhpScoper7239e3eaf11a\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $containerConfigurator->import(SetList::ARRAY);
};
