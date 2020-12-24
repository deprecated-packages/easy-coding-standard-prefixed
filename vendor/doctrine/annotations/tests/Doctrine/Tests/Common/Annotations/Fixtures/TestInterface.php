<?php

namespace _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper629192f0909b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
