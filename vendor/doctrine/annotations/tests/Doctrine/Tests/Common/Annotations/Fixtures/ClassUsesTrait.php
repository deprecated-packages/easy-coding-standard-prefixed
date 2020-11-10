<?php

namespace _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
