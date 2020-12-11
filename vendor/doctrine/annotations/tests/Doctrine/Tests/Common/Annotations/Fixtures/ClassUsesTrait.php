<?php

namespace _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
