<?php

namespace _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
