<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
