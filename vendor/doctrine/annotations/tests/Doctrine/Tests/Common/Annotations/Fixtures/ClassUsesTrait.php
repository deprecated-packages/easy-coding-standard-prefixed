<?php

namespace _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
