<?php

namespace _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper11a6395266c4\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
