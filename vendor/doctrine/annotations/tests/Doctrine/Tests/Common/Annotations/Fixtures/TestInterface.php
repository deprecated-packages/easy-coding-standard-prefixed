<?php

namespace _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad4b7e2c09d8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
