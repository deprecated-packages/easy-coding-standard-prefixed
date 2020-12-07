<?php

namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
