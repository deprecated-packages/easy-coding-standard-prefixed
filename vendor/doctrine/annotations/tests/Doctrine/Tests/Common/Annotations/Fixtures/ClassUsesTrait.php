<?php

namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
