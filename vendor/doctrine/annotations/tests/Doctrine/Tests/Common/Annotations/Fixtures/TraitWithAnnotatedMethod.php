<?php

namespace _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
