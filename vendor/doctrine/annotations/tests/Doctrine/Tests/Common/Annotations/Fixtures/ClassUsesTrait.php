<?php

namespace _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
