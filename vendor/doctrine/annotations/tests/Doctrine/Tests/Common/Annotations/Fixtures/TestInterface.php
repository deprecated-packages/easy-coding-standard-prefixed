<?php

namespace _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
