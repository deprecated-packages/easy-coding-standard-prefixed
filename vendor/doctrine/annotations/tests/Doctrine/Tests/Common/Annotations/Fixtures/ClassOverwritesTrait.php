<?php

namespace _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
