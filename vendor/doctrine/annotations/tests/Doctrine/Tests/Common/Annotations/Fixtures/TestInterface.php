<?php

namespace _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb36402634947\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
