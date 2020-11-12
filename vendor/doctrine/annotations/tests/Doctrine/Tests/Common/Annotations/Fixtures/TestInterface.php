<?php

namespace _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3d6b50c3ca2f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
