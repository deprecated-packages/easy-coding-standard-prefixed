<?php

namespace _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperedc2e0c967db\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
