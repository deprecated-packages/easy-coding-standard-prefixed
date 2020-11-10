<?php

namespace _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper0c236037eb04\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
