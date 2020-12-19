<?php

namespace _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
