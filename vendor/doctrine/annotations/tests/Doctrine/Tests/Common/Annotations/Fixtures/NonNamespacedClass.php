<?php

namespace _PhpScopera34ae19e8d40;

use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera34ae19e8d40\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera34ae19e8d40\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
