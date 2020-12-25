<?php

namespace _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
