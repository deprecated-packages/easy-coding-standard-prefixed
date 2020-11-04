<?php

namespace _PhpScoper75713bc3e278\Doctrine\Tests\Common\Annotations\Fixtures;

/**
 * @Annotation
 * @Target("ALL")
 */
final class AnnotationEnumInvalid
{
    /**
     * @var mixed
     *
     * @Enum({1, 2, "foo", "bar", {"foo":"bar"}})
     */
    public $value;
}
