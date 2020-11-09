<?php

namespace _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperae959d396e95\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
