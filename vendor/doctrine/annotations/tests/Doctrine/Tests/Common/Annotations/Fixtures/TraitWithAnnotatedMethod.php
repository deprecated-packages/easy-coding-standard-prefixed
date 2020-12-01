<?php

namespace _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
