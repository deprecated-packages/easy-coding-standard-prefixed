<?php

namespace _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\Fixtures;

// Include a class named Api
require_once __DIR__ . '/Api.php';
use _PhpScoper18bd934c069f\Doctrine\Tests\Common\Annotations\DummyAnnotationWithIgnoredAnnotation;
/**
 * @DummyAnnotationWithIgnoredAnnotation(dummyValue="hello")
 */
class ClassWithRequire
{
}
