<?php

namespace _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
