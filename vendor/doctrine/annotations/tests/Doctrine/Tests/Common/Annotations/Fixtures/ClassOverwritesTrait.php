<?php

namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper56c9df53a081\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
