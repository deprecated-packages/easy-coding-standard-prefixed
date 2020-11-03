<?php

namespace _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperaad82bb90a86\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
