<?php

namespace _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4972b76c81a2\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
