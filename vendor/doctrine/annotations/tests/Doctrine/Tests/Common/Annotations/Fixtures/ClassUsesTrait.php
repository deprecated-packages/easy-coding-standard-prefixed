<?php

namespace _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
