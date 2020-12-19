<?php

namespace _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper065e4ba46e6d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
