<?php

namespace _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
