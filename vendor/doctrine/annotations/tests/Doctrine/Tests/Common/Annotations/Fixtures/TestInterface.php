<?php

namespace _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2fe14d6302bc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
