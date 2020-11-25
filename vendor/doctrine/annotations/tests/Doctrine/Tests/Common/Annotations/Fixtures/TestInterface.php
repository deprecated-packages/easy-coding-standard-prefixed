<?php

namespace _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperca8ca183ac38\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
