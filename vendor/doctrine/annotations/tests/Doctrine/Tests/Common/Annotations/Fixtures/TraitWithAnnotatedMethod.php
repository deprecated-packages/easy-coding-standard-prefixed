<?php

namespace _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb2e2c0c42e71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
