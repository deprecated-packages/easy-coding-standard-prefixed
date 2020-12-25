<?php

namespace _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
