<?php

namespace _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
