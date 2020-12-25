<?php

namespace _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
