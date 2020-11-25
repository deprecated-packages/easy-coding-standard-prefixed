<?php

namespace _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper833c56a97273\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
