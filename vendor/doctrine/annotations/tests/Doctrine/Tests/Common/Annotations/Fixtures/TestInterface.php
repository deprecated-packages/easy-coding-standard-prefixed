<?php

namespace _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper224ae0b86670\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
