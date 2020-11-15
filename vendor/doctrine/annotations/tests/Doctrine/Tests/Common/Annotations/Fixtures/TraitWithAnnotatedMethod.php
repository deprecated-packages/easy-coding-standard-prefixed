<?php

namespace _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
