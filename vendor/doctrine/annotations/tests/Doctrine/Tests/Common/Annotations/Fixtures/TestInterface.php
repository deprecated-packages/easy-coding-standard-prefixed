<?php

namespace _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper239b374a39c8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
