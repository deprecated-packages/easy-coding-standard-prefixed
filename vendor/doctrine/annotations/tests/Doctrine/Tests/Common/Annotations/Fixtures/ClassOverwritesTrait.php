<?php

namespace _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
