<?php

namespace _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
