<?php

namespace _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
