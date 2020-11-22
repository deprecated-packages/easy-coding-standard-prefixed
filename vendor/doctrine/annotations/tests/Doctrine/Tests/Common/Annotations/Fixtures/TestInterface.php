<?php

namespace _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
