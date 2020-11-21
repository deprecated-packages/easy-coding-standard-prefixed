<?php

namespace _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3639953bb9e5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
