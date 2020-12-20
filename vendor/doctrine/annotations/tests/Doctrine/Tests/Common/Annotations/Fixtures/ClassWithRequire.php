<?php

namespace _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\Fixtures;

// Include a class named Api
require_once __DIR__ . '/Api.php';
use _PhpScoperba24099fc6fd\Doctrine\Tests\Common\Annotations\DummyAnnotationWithIgnoredAnnotation;
/**
 * @DummyAnnotationWithIgnoredAnnotation(dummyValue="hello")
 */
class ClassWithRequire
{
}
