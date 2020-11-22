<?php

namespace _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
