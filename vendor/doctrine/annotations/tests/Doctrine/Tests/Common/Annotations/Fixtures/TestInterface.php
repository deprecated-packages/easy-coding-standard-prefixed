<?php

namespace _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper81b3ff5ab9fe\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
