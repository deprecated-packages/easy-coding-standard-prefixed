<?php

namespace _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper326bba7310a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
