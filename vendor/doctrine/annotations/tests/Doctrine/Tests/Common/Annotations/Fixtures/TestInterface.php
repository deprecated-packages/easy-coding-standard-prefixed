<?php

namespace _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper967c4b7e296e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
