<?php

namespace _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
