<?php

namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
