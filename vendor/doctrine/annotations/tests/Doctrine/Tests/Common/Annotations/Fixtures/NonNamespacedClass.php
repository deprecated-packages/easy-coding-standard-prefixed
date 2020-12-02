<?php

namespace _PhpScopera23ebff5477f;

use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera23ebff5477f\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera23ebff5477f\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
