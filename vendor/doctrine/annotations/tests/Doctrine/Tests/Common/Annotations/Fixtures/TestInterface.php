<?php

namespace _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf62d28230928\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
