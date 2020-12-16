<?php

namespace _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperc75fd40d7a6e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
