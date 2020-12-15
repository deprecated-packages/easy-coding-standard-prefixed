<?php

namespace _PhpScoper37a255897161\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper37a255897161\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
