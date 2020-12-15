<?php

namespace _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper839420027581\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
