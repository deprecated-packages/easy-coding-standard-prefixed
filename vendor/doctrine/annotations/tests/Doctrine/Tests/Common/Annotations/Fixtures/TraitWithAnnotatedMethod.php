<?php

namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
