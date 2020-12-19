<?php

namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
