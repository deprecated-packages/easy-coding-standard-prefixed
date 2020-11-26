<?php

namespace _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
