<?php

namespace _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperfcf15c26e033\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
