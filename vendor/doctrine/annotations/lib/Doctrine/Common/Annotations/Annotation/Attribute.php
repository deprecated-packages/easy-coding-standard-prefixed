<?php

namespace _PhpScoper96c81c3c1716\Doctrine\Common\Annotations\Annotation;

/**
 * Annotation that can be used to signal to the parser
 * to check the attribute type during the parsing process.
 *
 * @Annotation
 */
final class Attribute
{
    /** @var string */
    public $name;
    /** @var string */
    public $type;
    /** @var bool */
    public $required = \false;
}
