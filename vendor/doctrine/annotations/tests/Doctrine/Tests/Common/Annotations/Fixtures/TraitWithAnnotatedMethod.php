<?php

namespace _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
