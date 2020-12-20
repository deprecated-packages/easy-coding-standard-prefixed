<?php

namespace _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
