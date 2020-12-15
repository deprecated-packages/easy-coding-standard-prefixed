<?php

namespace _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdeea1786e972\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
