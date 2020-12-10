<?php

namespace _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4edd80b4ab80\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
