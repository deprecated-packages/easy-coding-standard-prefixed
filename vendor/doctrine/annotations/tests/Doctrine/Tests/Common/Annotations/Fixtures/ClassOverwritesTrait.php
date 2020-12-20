<?php

namespace _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
