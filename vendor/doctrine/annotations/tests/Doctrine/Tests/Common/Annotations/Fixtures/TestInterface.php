<?php

namespace _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper48800f361566\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
