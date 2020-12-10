<?php

namespace _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
