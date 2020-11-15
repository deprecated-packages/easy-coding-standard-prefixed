<?php

namespace _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper279cf54b77ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
