<?php

namespace _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperaba240c3d5f1\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
