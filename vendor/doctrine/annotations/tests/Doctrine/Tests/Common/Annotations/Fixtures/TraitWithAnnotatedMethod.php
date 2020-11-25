<?php

namespace _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
