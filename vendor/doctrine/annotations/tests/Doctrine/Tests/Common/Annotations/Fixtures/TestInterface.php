<?php

namespace _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
