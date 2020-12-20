<?php

namespace _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
