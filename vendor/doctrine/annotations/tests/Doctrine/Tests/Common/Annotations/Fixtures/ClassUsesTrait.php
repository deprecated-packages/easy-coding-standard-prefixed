<?php

namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
