<?php

namespace _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
