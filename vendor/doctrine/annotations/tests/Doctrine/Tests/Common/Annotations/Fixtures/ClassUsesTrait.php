<?php

namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
class ClassUsesTrait
{
    use TraitWithAnnotatedMethod;
    /**
     * @Autoload
     */
    public $aProperty;
    /**
     * @Autoload
     */
    public function someMethod()
    {
    }
}
namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
