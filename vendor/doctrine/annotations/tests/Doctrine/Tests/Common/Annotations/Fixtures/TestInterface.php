<?php

namespace _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21c6ce8bfe5d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
