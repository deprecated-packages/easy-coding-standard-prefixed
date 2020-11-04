<?php

namespace _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
