<?php

namespace _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
