<?php

namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
