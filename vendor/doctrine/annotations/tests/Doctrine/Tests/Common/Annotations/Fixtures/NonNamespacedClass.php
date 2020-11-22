<?php

namespace _PhpScopera88a8b9f064a;

use _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera88a8b9f064a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera88a8b9f064a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
