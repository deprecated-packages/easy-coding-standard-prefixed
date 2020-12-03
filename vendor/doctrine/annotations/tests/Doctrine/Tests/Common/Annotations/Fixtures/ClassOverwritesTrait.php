<?php

namespace _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper6c2f17c43d2d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
