<?php

namespace _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
