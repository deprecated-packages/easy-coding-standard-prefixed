<?php

namespace _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
