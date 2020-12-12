<?php

namespace _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
