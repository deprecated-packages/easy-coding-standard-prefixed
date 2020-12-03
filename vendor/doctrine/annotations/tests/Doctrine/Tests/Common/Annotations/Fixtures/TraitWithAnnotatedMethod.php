<?php

namespace _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
