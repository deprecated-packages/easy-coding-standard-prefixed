<?php

namespace _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper614deab2c612\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
