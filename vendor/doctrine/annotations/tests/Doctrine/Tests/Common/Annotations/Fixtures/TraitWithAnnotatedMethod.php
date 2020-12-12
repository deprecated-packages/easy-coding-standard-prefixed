<?php

namespace _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdaf95aff095b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
