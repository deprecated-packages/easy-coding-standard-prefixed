<?php

namespace _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopereb8678af2407\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
