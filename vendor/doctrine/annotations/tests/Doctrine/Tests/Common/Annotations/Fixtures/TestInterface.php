<?php

namespace _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb458b528613f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
