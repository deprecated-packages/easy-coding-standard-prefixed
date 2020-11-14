<?php

namespace _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
