<?php

namespace _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4a718ec9156e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
