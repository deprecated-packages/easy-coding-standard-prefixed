<?php

namespace _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
