<?php

namespace _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
