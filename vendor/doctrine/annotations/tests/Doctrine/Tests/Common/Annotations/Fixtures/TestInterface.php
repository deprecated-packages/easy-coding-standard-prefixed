<?php

namespace _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4298f97f3cb3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
