<?php

namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
