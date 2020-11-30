<?php

namespace _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
