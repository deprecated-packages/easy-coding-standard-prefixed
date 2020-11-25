<?php

namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
