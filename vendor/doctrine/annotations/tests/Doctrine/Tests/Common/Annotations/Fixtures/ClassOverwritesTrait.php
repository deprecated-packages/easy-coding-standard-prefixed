<?php

namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
class ClassOverwritesTrait
{
    use TraitWithAnnotatedMethod;
    /**
     * @Autoload
     */
    public function traitMethod()
    {
    }
}
namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
