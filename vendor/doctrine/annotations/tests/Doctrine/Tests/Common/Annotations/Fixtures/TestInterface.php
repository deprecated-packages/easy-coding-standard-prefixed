<?php

namespace _PhpScoperd9c3b46af121\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd9c3b46af121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
