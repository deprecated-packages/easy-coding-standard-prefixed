<?php

namespace _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21763e6c7ac4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
