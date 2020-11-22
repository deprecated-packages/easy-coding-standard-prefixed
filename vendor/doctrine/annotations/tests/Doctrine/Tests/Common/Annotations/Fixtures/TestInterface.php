<?php

namespace _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperfacc742d2745\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
