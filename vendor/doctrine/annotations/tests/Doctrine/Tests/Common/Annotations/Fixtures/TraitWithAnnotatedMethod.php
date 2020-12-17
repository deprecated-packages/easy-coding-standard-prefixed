<?php

namespace _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
