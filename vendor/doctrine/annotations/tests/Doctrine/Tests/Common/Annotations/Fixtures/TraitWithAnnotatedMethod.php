<?php

namespace _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6a8e65b492c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
