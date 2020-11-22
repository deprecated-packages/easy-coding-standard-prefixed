<?php

namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper66292c14b658\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
