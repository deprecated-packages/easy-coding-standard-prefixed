<?php

namespace _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
