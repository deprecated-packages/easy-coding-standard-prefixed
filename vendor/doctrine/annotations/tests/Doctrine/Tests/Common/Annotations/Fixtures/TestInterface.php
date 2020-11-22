<?php

namespace _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper21fff473f90a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
