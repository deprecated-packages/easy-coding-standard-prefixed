<?php

namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
