<?php

namespace _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperad68e34a80c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
