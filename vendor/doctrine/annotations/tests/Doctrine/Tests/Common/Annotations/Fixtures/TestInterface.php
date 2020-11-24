<?php

namespace _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper528afa732cbd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
