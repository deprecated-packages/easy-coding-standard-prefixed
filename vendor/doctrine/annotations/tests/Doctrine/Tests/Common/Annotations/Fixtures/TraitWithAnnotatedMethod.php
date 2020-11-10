<?php

namespace _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
