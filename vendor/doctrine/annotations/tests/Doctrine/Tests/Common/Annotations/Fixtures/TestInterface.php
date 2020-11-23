<?php

namespace _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7b8580219c59\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
