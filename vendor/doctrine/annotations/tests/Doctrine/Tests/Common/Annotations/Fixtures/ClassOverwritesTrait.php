<?php

namespace _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper3e8786a75afe\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
