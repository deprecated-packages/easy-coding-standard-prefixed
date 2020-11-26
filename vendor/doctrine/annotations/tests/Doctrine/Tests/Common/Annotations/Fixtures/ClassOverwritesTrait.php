<?php

namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
