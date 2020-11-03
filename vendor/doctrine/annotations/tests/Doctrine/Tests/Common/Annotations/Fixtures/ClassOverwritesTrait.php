<?php

namespace _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Bar2\Autoload;
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
namespace _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Bar2;

/** @Annotation */
class Autoload
{
}
