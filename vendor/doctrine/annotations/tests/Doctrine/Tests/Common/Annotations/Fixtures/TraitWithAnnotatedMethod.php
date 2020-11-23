<?php

namespace _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
