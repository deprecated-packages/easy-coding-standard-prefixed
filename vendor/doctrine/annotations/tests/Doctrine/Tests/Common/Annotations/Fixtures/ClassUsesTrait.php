<?php

namespace _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
