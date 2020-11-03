<?php

namespace _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper133be48300f9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
