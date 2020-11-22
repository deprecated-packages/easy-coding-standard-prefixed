<?php

namespace _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper797695bcfb1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
