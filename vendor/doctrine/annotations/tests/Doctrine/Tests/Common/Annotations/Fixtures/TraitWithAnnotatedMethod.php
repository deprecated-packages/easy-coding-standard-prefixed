<?php

namespace _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
