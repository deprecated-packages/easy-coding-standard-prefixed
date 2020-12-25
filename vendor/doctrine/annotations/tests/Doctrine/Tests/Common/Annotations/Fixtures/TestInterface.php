<?php

namespace _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc8fea59b0cb1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
