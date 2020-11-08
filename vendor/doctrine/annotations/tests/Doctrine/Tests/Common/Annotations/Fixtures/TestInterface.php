<?php

namespace _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper190659c42b56\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
