<?php

namespace _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
