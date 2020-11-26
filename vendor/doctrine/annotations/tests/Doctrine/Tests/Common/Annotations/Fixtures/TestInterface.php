<?php

namespace _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper167729fa1dde\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
