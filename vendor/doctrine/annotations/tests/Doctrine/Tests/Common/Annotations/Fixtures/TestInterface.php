<?php

namespace _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperf7b66f9e3817\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
