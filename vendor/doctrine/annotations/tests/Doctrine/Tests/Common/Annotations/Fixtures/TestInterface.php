<?php

namespace _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd4937ee9b515\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
