<?php

namespace _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9b9ddfd01528\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
