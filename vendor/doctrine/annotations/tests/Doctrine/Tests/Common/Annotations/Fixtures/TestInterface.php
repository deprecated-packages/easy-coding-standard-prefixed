<?php

namespace _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
