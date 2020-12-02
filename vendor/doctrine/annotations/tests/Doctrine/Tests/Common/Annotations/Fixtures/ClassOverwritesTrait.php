<?php

namespace _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper6a0a7eb6e565\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
