<?php

namespace _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
