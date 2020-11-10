<?php

namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
