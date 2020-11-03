<?php

namespace _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper83a475a0590e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
