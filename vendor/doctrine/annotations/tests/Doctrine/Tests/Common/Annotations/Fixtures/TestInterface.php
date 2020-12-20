<?php

namespace _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
