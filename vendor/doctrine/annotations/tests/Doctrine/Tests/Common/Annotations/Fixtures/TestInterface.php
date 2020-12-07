<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
