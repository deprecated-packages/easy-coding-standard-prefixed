<?php

namespace _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
