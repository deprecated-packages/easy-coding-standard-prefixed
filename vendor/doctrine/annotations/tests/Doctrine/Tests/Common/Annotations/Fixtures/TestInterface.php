<?php

namespace _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper04022cd986ec\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
