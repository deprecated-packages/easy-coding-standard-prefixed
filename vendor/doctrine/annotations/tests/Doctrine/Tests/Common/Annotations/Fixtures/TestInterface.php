<?php

namespace _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper06c66bea2cf6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
