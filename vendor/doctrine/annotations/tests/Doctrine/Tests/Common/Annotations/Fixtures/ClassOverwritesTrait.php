<?php

namespace _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
