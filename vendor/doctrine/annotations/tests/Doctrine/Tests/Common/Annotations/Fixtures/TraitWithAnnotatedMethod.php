<?php

namespace _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper31ba553edf97\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
