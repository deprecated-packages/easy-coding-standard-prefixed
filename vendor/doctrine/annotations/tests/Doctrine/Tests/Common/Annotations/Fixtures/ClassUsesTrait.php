<?php

namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
