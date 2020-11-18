<?php

namespace _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperf77bffce0320\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
