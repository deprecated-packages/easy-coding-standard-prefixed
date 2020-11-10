<?php

namespace _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
