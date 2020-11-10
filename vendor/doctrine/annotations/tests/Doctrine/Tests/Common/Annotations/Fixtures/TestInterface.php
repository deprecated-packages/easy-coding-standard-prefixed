<?php

namespace _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere5e7dca8c031\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
