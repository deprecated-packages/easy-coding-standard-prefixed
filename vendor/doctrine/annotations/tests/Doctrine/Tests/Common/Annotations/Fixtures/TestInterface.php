<?php

namespace _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
