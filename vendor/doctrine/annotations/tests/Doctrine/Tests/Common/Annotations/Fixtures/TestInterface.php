<?php

namespace _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
