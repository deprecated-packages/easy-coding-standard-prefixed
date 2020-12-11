<?php

namespace _PhpScoperea337ed74749;

use _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperea337ed74749\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperea337ed74749\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
