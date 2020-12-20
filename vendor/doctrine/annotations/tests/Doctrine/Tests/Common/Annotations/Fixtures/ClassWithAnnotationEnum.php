<?php

namespace _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper5384d7276e1f\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationEnum;
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
