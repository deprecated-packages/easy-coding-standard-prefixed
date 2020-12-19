<?php

namespace _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
