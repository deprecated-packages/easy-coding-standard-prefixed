<?php

namespace _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper589e8c04a9ef\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
