<?php

namespace _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5cb8aea05893\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
