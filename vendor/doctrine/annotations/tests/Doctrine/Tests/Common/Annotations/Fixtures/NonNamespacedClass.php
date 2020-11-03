<?php

namespace _PhpScopera238de2e9b5a;

use _PhpScopera238de2e9b5a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera238de2e9b5a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera238de2e9b5a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
