<?php

namespace _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
