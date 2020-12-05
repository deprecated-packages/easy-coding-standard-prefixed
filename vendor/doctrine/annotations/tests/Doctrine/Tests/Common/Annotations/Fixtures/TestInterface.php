<?php

namespace _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
