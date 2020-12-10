<?php

namespace _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
