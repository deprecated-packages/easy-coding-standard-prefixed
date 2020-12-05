<?php

namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
