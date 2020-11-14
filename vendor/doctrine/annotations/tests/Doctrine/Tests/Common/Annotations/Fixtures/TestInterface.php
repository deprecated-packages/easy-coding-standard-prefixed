<?php

namespace _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper229e8121cf9f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
