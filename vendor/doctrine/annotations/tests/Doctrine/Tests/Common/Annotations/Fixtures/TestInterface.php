<?php

namespace _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper16399a42e87c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
