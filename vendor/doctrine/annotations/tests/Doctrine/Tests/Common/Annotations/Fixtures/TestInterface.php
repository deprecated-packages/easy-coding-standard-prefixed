<?php

namespace _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9885c8c176c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
