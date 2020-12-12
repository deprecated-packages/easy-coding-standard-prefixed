<?php

namespace _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
