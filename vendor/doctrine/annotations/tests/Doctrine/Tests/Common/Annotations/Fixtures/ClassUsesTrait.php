<?php

namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
