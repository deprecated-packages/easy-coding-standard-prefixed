<?php

namespace _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\Fixtures;

// Include a class named Api
require_once __DIR__ . '/Api.php';
use _PhpScoper4cd05b62e9f1\Doctrine\Tests\Common\Annotations\DummyAnnotationWithIgnoredAnnotation;
/**
 * @DummyAnnotationWithIgnoredAnnotation(dummyValue="hello")
 */
class ClassWithRequire
{
}
