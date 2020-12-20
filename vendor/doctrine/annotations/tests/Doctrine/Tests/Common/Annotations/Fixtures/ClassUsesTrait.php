<?php

namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
