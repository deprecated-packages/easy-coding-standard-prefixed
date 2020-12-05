<?php

namespace _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
