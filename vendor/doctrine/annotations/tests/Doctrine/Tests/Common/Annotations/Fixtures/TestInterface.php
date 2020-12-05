<?php

namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
