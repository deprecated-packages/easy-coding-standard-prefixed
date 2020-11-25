<?php

namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
