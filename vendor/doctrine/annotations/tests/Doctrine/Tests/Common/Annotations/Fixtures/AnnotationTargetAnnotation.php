<?php

namespace _PhpScoperad4605bb9267\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target({ "ANNOTATION" })
 */
final class AnnotationTargetAnnotation
{
    public $data;
    public $name;
    public $target;
}
