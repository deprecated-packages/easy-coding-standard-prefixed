<?php

namespace _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper836bc32aecc2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
