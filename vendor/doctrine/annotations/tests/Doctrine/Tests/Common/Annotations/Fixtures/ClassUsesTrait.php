<?php

namespace _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
