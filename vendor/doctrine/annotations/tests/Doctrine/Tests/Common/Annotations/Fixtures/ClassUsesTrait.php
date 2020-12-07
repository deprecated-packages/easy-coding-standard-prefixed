<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
