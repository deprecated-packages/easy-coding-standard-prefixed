<?php

namespace _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
