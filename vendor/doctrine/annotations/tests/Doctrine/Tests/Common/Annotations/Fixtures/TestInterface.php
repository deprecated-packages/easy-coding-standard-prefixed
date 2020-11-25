<?php

namespace _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper7312d63d356f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
