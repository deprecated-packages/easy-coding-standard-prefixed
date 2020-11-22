<?php

namespace _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbc5235eb86f3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
