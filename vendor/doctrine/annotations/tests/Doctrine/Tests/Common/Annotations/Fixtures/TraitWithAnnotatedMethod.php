<?php

namespace _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6ec31b85adcf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
