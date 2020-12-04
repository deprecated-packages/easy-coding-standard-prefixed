<?php

namespace _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera04bf8e97c06\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
