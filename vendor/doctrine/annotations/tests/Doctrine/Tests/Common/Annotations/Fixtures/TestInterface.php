<?php

namespace _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
