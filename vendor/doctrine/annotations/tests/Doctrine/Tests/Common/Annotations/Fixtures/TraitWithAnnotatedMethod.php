<?php

namespace _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
