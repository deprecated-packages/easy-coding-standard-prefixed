<?php

namespace _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
