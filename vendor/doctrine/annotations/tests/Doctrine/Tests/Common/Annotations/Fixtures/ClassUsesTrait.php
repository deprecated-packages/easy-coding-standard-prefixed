<?php

namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
