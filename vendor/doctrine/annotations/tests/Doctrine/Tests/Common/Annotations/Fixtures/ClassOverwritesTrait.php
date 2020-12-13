<?php

namespace _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
