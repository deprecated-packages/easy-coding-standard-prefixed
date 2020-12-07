<?php

namespace _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
