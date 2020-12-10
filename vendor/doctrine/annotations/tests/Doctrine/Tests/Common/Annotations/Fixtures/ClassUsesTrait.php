<?php

namespace _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
