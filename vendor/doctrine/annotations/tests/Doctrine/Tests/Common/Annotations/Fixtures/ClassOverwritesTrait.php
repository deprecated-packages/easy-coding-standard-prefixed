<?php

namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
