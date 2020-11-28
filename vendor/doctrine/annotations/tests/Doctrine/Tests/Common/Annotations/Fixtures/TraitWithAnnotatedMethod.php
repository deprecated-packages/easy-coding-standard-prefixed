<?php

namespace _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc8b83ee8976a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
