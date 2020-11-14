<?php

namespace _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4936962185e7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
