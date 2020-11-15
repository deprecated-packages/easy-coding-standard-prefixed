<?php

namespace _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper207eb8f99af3\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationEnum;
class ClassWithAnnotationEnum
{
    /**
     * @AnnotationEnum(AnnotationEnum::ONE)
     */
    public $foo;
    /**
     * @AnnotationEnum("TWO")
     */
    public function bar()
    {
    }
    /**
     * @AnnotationEnum("FOUR")
     */
    public $invalidProperty;
    /**
     * @AnnotationEnum(5)
     */
    public function invalidMethod()
    {
    }
}
