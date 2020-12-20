<?php

namespace _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper611f49771945\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
