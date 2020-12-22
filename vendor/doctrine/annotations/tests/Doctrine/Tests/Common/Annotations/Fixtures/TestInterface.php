<?php

namespace _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57272265e1c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
