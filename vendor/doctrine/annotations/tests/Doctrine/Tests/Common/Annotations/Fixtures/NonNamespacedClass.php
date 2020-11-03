<?php

namespace _PhpScopercf327c47dfc5;

use _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercf327c47dfc5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercf327c47dfc5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
