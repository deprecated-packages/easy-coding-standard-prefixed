<?php

namespace _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfab1bfb7ec99\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
