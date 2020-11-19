<?php

namespace _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper63567e560066\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
