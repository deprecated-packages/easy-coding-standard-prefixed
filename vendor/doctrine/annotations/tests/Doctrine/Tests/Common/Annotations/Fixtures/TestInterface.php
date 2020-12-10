<?php

namespace _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper58a0a169dcfb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
