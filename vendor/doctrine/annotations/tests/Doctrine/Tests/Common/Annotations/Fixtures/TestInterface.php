<?php

namespace _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera749ac204cd2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
