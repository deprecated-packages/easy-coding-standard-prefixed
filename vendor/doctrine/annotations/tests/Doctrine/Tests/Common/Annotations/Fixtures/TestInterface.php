<?php

namespace _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d04c8135695\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
