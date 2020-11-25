<?php

namespace _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\Fixtures;

// Include a class named Api
require_once __DIR__ . '/Api.php';
use _PhpScoperaac5f7c652e4\Doctrine\Tests\Common\Annotations\DummyAnnotationWithIgnoredAnnotation;
/**
 * @DummyAnnotationWithIgnoredAnnotation(dummyValue="hello")
 */
class ClassWithRequire
{
}
