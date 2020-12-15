<?php

namespace _PhpScoper6a1dd9b8a650\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6a1dd9b8a650\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
