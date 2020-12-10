<?php

namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
