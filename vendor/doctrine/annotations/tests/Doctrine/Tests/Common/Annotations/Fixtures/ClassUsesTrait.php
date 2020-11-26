<?php

namespace _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
