<?php

namespace _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfa521053d812\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
