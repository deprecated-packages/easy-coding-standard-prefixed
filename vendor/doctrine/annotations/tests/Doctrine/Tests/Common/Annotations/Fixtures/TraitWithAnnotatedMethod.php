<?php

namespace _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
