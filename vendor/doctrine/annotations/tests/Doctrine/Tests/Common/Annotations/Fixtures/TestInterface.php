<?php

namespace _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
