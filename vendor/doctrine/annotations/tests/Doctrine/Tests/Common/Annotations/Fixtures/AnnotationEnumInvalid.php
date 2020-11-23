<?php

namespace _PhpScoperc4b135661b3a\Doctrine\Tests\Common\Annotations\Fixtures;

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
