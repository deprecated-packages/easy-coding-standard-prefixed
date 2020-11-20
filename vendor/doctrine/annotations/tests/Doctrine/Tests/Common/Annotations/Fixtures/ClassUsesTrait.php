<?php

namespace _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
