<?php

namespace _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
