<?php

namespace _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera1a51450b61d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
