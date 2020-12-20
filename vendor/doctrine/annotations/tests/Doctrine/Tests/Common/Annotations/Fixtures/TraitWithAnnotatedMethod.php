<?php

namespace _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
