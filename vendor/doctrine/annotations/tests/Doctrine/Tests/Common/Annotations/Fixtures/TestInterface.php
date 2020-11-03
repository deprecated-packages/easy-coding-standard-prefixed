<?php

namespace _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5928e324b45e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
