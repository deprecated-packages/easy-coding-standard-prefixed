<?php

namespace _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
