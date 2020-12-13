<?php

namespace _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
