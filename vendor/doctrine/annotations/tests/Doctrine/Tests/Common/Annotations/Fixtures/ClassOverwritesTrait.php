<?php

namespace _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
