<?php

namespace _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb44a315fec16\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
