<?php

namespace _PhpScoperd79d87c3336e;

use _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd79d87c3336e\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd79d87c3336e\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
