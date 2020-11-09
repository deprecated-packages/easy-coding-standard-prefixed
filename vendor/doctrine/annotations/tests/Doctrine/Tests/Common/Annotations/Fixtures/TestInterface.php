<?php

namespace _PhpScoper0d0ee1ba46d4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0d0ee1ba46d4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
