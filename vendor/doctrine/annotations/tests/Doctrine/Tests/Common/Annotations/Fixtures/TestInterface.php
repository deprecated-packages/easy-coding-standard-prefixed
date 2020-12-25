<?php

namespace _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
