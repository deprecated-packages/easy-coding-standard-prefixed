<?php

namespace _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd9fcac9e904f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
