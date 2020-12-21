<?php

namespace _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
