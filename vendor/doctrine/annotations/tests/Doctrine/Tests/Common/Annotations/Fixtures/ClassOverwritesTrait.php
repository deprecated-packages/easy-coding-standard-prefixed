<?php

namespace _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
