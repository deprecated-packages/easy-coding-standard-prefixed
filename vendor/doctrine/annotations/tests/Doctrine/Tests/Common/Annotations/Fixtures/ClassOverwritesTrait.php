<?php

namespace _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
