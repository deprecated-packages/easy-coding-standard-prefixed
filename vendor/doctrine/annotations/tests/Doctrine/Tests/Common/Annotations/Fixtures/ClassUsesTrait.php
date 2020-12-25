<?php

namespace _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
