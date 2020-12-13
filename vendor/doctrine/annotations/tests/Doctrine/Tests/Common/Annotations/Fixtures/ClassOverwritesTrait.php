<?php

namespace _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
