<?php

namespace _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
