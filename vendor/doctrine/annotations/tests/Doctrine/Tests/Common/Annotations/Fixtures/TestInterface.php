<?php

namespace _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper6224e3b16fcc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
