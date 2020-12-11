<?php

namespace _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
