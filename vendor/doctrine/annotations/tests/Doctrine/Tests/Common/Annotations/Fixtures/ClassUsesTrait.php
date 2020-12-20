<?php

namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
