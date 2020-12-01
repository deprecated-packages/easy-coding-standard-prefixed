<?php

namespace _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
