<?php

namespace _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
