<?php

namespace _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
