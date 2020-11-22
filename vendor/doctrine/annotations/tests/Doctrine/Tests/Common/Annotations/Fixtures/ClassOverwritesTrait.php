<?php

namespace _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
