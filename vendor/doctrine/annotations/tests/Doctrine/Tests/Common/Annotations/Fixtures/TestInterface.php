<?php

namespace _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd35c27cd4b09\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
