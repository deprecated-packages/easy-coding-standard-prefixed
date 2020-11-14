<?php

namespace _PhpScoperb09c3ec8e01a\Doctrine\Tests\Common\Annotations\Fixtures;

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
