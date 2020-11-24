<?php

namespace _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd675aaf00c76\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
