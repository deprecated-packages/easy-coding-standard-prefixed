<?php

namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
