<?php

namespace _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper8751341571b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
