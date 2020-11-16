<?php

namespace _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper1103e00fb46b\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
/**
 * @AnnotationTargetPropertyMethod("Some data")
 */
class ClassWithInvalidAnnotationTargetAtClass
{
    /**
     * @AnnotationTargetPropertyMethod("Bar")
     */
    public $foo;
}
