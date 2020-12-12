<?php

namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
