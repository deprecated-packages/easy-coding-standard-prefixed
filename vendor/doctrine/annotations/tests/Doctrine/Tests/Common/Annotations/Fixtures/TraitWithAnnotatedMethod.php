<?php

namespace _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
