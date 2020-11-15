<?php

namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
