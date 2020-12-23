<?php

namespace _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
