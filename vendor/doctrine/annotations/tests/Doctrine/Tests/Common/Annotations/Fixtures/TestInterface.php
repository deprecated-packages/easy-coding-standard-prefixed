<?php

namespace _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9ef667a5e42c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
