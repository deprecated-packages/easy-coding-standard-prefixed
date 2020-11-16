<?php

namespace _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScopera9d6b451df71\Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetClass;
/**
 * @AnnotationTargetClass("Some data")
 */
class ClassWithInvalidAnnotationTargetAtMethod
{
    /**
     * @AnnotationTargetClass("functionName")
     */
    public function functionName($param)
    {
    }
}
