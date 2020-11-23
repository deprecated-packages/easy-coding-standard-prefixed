<?php

namespace _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
