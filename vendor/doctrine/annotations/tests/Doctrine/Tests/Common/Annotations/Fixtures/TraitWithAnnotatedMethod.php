<?php

namespace _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
