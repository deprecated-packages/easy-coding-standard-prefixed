<?php

namespace _PhpScoper6207116d4311\Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

/** @Annotation */
class Template
{
    private $name;
    public function __construct(array $values)
    {
        $this->name = isset($values['value']) ? $values['value'] : null;
    }
}
