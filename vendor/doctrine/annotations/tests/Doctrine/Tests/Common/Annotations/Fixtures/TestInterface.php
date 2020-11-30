<?php

namespace _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper246d7c16d32f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
