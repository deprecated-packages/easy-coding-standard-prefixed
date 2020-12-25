<?php

namespace _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper592524ba34f0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
