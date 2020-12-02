<?php

namespace _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
