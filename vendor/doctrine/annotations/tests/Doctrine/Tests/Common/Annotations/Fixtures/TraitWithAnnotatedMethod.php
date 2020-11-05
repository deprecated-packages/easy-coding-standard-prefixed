<?php

namespace _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
