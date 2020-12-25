<?php

namespace _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
