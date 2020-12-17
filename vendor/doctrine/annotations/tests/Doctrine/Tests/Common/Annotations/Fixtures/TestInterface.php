<?php

namespace _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercf909b66eba8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
