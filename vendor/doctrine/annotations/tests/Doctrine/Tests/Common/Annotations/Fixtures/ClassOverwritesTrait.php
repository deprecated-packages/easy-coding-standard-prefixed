<?php

namespace _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperc233426b15e0\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
