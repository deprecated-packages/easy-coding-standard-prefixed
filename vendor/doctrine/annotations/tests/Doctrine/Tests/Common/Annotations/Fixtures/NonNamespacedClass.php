<?php

namespace _PhpScopera09818bc50da;

use _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera09818bc50da\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera09818bc50da\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
