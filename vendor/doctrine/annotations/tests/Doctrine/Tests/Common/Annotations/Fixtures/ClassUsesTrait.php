<?php

namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
