<?php

namespace _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopere4fa57261c04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
