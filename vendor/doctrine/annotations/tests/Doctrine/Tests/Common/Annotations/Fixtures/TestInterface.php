<?php

namespace _PhpScoper5ca2d8bcb02c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5ca2d8bcb02c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
