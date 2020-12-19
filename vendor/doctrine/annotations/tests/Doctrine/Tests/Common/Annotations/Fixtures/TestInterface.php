<?php

namespace _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
