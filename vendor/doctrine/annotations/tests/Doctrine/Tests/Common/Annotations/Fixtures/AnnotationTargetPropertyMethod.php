<?php

namespace _PhpScoper418afc2f157c\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target({ "METHOD", "PROPERTY" })
 */
final class AnnotationTargetPropertyMethod
{
    public $data;
    public $name;
    public $target;
}
