<?php

namespace _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperf3d5f0921050\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
