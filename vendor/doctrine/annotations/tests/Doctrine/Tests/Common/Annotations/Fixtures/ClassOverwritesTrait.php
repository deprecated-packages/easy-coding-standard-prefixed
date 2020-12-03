<?php

namespace _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
