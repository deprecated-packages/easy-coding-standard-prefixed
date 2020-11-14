<?php

namespace _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
