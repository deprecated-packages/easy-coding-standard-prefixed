<?php

namespace _PhpScoperb730595bc9f4\Doctrine\Tests\Common\Annotations\Fixtures;

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
