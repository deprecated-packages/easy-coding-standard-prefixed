<?php

namespace _PhpScoperd8b12759ee0d;

use _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd8b12759ee0d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd8b12759ee0d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
