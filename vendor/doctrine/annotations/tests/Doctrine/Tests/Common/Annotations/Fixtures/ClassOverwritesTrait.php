<?php

namespace _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper8a0112f19f39\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
