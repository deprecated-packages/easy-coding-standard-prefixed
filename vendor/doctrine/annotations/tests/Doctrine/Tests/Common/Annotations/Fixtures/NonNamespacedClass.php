<?php

namespace _PhpScoperbcc0395698f8;

use _PhpScoperbcc0395698f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperbcc0395698f8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperbcc0395698f8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
