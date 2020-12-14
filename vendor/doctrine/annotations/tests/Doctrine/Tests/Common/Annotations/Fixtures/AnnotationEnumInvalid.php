<?php

namespace _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures;

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
