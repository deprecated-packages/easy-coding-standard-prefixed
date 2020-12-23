<?php

namespace _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper14cb6de5473d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
