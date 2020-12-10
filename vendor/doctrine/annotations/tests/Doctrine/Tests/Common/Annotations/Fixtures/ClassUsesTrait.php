<?php

namespace _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
