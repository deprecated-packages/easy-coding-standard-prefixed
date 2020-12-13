<?php

namespace _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper78af57a363a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
