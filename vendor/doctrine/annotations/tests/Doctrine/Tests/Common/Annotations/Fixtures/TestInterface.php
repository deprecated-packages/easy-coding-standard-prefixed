<?php

namespace _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
