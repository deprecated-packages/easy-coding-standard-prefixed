<?php

namespace _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Autoload;
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
