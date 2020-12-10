<?php

namespace _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper908feaf49cd8\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
