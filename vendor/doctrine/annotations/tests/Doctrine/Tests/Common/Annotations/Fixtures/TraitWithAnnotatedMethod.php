<?php

namespace _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf3f1be0d8a30\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
