<?php

namespace _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoperb383f16e851e\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
