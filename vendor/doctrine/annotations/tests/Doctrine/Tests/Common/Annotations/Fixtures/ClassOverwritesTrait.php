<?php

namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
class ClassOverwritesTrait
{
    use TraitWithAnnotatedMethod;
    /**
     * @Autoload
     */
    public function traitMethod()
    {
    }
}
namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
