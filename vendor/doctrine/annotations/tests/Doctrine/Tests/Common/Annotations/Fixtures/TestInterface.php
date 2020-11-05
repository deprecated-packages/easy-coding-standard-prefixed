<?php

namespace _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperdebd9d705540\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
