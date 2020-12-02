<?php

namespace _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
