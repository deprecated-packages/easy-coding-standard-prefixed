<?php

namespace _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc64a4ac1af35\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
