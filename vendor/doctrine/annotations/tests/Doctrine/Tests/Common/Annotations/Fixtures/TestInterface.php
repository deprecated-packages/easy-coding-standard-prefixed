<?php

namespace _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
