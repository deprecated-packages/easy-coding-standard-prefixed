<?php

namespace _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7c1f54fd2f3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
