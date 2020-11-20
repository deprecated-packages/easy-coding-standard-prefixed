<?php

namespace _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc753ccca5a0c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
