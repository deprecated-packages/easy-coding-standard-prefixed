<?php

namespace _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper02b5d1bf8fec\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
