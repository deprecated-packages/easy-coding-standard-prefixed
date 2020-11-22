<?php

namespace _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperf3db63c305b2\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
