<?php

namespace _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0270f1d35181\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
