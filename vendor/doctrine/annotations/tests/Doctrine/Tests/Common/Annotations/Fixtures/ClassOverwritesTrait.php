<?php

namespace _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper776637f3d3c3\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
