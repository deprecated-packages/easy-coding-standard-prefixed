<?php

namespace _PhpScopera8f555a7493c;

use _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera8f555a7493c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera8f555a7493c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
