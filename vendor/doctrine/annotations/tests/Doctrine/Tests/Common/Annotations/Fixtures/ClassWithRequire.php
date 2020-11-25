<?php

namespace _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\Fixtures;

// Include a class named Api
require_once __DIR__ . '/Api.php';
use _PhpScoperdc8fbcd7c69d\Doctrine\Tests\Common\Annotations\DummyAnnotationWithIgnoredAnnotation;
/**
 * @DummyAnnotationWithIgnoredAnnotation(dummyValue="hello")
 */
class ClassWithRequire
{
}
