<?php

namespace _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper880bfa4d8b51\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
