<?php

namespace _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5ade29b97028\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
