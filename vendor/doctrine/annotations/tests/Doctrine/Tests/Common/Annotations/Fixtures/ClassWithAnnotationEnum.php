<?php

namespace _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb6ccec8ab642\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationEnum;
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
