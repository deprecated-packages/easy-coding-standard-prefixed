<?php

namespace _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4f985154d5a0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
