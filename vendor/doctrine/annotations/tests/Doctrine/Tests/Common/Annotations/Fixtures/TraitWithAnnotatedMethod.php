<?php

namespace _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
