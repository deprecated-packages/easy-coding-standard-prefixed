<?php

namespace _PhpScoper70072c07b02b;

use _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper70072c07b02b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @Route("foo")
 * @Template
 */
class AnnotationsTestsFixturesNonNamespacedClass
{
}
/**
 * @Route("foo")
 * @Template
 */
\class_alias('_PhpScoper70072c07b02b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
