<?php

namespace _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
