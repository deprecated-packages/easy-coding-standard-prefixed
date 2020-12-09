<?php

namespace _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
