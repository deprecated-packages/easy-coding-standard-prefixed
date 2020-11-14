<?php

namespace _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
