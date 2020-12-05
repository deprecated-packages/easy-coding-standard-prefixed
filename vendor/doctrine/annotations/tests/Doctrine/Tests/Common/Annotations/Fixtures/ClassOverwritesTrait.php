<?php

namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
