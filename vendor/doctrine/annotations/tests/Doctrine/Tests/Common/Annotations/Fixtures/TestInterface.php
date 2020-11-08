<?php

namespace _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
