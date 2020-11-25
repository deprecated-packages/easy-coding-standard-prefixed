<?php

namespace _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaa402dd1b1f1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
