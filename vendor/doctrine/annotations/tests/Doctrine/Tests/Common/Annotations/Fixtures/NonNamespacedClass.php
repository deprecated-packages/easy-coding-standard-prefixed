<?php

namespace _PhpScopera4be459e5e3d;

use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera4be459e5e3d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera4be459e5e3d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
