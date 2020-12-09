<?php

namespace _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdf15f2b748e9\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
