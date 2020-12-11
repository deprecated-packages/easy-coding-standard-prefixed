<?php

namespace _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper23ef26a4fb01\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
