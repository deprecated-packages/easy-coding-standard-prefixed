<?php

namespace _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
