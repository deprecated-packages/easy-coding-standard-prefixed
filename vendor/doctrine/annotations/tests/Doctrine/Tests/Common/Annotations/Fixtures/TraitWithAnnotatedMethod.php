<?php

namespace _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
