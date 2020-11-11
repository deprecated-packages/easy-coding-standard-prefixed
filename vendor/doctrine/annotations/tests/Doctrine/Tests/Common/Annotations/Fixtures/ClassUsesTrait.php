<?php

namespace _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
