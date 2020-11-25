<?php

namespace _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
