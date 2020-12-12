<?php

namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Bar\Autoload;
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
namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Bar;

/** @Annotation */
class Autoload
{
}
