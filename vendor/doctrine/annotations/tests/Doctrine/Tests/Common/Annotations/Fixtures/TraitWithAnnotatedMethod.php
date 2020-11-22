<?php

namespace _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
