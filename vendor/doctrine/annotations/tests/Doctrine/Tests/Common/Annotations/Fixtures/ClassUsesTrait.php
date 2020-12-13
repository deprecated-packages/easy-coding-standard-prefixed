<?php

namespace _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper8db4616aa69d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
