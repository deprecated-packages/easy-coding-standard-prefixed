<?php

namespace _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2a48669dad72\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
