<?php

namespace _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
