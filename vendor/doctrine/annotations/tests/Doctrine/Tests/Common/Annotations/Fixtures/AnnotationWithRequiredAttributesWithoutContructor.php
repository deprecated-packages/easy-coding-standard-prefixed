<?php

namespace _PhpScoper08748c77fa1c\Doctrine\Tests\Common\Annotations\Fixtures;

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
