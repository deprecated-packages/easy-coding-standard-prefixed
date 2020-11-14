<?php

namespace _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures;

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
