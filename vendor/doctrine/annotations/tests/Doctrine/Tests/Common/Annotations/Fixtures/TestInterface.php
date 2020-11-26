<?php

namespace _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
