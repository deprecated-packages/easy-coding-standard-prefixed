<?php

namespace _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc7c7dddc9238\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
