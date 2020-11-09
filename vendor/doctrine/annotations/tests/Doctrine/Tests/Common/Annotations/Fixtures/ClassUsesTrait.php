<?php

namespace _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
