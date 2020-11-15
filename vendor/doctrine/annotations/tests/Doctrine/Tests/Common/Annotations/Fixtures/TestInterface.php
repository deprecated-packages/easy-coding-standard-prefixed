<?php

namespace _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper49c742f5a4ee\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
