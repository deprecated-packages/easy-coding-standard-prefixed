<?php

namespace _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2731c1906fe4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
