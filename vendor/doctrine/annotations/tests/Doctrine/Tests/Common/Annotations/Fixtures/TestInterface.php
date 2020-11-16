<?php

namespace _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3e1e0e5bb8ef\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
