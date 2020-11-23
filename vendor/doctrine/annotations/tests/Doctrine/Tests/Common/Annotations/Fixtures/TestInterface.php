<?php

namespace _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59558822d8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
