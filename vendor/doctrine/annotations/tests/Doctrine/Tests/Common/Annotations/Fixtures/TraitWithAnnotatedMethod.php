<?php

namespace _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
trait TraitWithAnnotatedMethod
{
    /**
     * @Autoload
     */
    public $traitProperty;
    /**
     * @Autoload
     */
    public function traitMethod()
    {
    }
}
