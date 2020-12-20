<?php

namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
