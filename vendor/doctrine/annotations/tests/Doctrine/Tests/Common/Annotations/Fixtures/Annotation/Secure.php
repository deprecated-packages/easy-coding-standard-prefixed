<?php

namespace _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

/** @Annotation */
class Secure
{
    private $roles;
    public function __construct(array $values)
    {
        if (\is_string($values['value'])) {
            $values['value'] = array($values['value']);
        }
        $this->roles = $values['value'];
    }
}
