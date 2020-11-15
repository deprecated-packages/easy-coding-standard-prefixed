<?php

namespace _PhpScopera189153e1f79;

use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera189153e1f79\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera189153e1f79\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
