<?php

namespace _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
