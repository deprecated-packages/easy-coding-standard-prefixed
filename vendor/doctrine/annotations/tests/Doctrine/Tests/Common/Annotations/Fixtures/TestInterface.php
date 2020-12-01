<?php

namespace _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6dbb854503f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
