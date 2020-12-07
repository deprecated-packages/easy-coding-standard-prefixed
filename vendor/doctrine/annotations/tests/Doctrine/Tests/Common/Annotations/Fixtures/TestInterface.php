<?php

namespace _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
