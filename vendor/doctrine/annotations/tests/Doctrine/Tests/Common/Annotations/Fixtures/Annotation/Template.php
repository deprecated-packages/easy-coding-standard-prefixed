<?php

namespace _PhpScoper96382aaac118\Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

/** @Annotation */
class Template
{
    private $name;
    public function __construct(array $values)
    {
        $this->name = isset($values['value']) ? $values['value'] : null;
    }
}
