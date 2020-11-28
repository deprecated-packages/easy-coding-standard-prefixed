<?php

namespace _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
