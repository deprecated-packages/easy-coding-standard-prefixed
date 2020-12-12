<?php

namespace _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
