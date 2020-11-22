<?php

namespace _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper3fa05b4669af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
