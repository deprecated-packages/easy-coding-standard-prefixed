<?php

namespace _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperd3d57724c802\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Secure;
interface TestInterface
{
    /**
     * @Secure
     */
    function foo();
}
