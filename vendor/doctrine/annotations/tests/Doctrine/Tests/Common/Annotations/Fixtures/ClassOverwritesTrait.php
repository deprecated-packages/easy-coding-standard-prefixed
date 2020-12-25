<?php

namespace _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
