<?php

namespace _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
