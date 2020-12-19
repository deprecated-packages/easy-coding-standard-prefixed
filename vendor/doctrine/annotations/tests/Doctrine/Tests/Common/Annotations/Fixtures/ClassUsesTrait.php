<?php

namespace _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
