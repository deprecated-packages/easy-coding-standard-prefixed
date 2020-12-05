<?php

namespace _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc83f84c90b60\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
