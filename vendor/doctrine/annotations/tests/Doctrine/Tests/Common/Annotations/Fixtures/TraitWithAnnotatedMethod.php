<?php

namespace _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
