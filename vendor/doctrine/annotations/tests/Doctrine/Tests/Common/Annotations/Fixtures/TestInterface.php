<?php

namespace _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0f5cd390c37a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
