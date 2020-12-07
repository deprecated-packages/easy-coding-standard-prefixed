<?php

namespace _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb73f9e44f4eb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
