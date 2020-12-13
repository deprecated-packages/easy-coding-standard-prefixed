<?php

namespace _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
