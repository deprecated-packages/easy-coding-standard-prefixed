<?php

namespace _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
