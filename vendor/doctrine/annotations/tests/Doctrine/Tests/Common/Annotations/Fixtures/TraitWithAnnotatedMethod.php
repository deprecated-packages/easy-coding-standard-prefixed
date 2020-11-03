<?php

namespace _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper61bdb485188f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
