<?php

namespace _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfd70a7e8e84f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
