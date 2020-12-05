<?php

namespace _PhpScoperbaf90856897c;

use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperbaf90856897c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperbaf90856897c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
