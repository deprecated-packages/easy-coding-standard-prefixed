<?php

namespace _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
