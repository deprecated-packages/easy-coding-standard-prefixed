<?php

namespace _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7108c819f5c5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
