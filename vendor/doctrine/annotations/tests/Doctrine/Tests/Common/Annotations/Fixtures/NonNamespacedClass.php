<?php

namespace _PhpScopera6f918786d5c;

use _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera6f918786d5c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera6f918786d5c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
