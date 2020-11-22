<?php

namespace _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
