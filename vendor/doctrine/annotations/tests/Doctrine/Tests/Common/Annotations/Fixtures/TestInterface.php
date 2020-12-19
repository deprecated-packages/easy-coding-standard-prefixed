<?php

namespace _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper269dc521b0fa\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
