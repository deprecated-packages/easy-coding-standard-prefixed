<?php

namespace _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
