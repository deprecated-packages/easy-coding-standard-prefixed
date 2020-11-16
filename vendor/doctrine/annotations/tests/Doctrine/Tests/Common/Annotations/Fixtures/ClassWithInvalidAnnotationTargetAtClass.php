<?php

namespace _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetPropertyMethod;
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
