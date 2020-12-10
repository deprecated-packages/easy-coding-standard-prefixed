<?php

namespace _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
