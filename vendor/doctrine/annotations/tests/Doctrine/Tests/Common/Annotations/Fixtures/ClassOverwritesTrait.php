<?php

namespace _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
