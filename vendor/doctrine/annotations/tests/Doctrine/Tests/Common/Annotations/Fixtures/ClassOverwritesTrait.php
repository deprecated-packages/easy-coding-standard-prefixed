<?php

namespace _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper7c3fefba1fb9\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
