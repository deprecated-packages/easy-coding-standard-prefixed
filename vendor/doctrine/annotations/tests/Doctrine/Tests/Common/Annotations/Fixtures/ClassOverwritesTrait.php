<?php

namespace _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
