<?php

namespace _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb26833cc184d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
