<?php

namespace _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper89ec3c69e67d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
