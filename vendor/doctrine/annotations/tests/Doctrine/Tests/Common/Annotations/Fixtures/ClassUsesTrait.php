<?php

namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
