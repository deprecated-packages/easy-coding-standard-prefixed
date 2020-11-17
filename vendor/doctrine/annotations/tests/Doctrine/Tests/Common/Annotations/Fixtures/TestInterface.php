<?php

namespace _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2a8ad010dfbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
