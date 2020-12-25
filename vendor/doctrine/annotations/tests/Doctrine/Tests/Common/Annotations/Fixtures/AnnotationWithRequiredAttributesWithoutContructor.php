<?php

namespace _PhpScoper9e3283ae8193\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target("ALL")
 */
final class AnnotationWithRequiredAttributesWithoutContructor
{
    /**
     * @Required
     * @var string
     */
    public $value;
    /**
     * @Required
     * @var Doctrine\Tests\Common\Annotations\Fixtures\AnnotationTargetAnnotation
     */
    public $annot;
}
