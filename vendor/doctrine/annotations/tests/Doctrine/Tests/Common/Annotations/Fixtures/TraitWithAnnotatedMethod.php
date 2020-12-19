<?php

namespace _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
