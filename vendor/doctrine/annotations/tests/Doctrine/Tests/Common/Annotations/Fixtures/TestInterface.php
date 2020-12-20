<?php

namespace _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
