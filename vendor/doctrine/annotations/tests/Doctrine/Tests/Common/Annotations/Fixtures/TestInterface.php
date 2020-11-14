<?php

namespace _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperecb978830f1e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
