<?php

namespace _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperac4e86be08e5\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
