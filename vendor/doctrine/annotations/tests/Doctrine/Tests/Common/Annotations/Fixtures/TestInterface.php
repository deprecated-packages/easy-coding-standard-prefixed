<?php

namespace _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48b5ec5b60cf\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
