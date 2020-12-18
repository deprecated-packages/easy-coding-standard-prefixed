<?php

namespace _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper4d3fa30a680b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
