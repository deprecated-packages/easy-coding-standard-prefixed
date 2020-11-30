<?php

namespace _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper2637e9a72c68\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
