<?php

namespace _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
