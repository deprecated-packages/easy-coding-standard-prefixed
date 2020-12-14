<?php

namespace _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
