<?php

namespace _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
