<?php

namespace _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2f75f00bf6fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
