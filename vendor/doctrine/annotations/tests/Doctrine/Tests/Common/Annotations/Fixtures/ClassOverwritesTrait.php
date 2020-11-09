<?php

namespace _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
