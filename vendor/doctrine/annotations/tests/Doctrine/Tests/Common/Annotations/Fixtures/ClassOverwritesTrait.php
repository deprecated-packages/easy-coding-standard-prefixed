<?php

namespace _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
