<?php

namespace _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4848279dba07\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
