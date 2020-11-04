<?php

namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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