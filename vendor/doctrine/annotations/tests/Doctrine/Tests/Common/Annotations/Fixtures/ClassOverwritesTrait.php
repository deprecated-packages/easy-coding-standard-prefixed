<?php

namespace _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperf5f75c22067b\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
