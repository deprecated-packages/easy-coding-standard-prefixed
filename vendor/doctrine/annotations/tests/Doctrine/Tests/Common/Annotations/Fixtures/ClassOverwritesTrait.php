<?php

namespace _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
