<?php

namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
