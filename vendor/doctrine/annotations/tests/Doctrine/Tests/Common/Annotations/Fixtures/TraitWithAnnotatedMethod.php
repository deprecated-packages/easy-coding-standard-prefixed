<?php

namespace _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
