<?php

namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
