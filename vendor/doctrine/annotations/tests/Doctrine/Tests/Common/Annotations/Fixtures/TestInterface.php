<?php

namespace _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper17bb67c99ade\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
