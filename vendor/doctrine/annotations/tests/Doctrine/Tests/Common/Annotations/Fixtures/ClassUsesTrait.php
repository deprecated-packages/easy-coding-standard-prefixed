<?php

namespace _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
