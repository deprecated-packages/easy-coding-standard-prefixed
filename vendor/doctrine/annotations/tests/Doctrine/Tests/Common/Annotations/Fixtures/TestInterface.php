<?php

namespace _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere341acab57d4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
