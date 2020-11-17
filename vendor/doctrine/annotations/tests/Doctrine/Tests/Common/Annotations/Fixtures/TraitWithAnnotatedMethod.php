<?php

namespace _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
