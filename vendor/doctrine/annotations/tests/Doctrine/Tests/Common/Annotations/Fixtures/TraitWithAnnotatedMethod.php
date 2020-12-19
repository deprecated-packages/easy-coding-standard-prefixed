<?php

namespace _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd1a5bf00e83e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
